GO.tasks.SimpleTasksPanel = function(config)
	{
		if(!config)
		{
			config = {};
		}

		config.id='su-tasks-grid';
		
		var reader = new Ext.data.JsonReader({
			root: 'results',
			totalProperty: 'total',
			fields:['id', 'name','completed','due_time','description','tasklist_name','late'],
			id: 'id'
		});
	
		config.store = new Ext.data.GroupingStore({
//			url: GO.settings.modules.tasks.url+'json.php',
			url: GO.url('tasks/portlet/portletGrid'),
			baseParams: {
//				'task': 'tasks',
//				'user_id' : GO.settings.user_id,
//				'active_only' : true,
//				'portlet' : true
			},
			reader: reader,
			sortInfo: {
				field: 'due_time',
				direction: 'ASC'
			},
			groupField: 'tasklist_name',
			remoteGroup:true,
			remoteSort:true
		});

		config.store.on('load', function(){
			//do layout on Startpage
			if(this.rendered)
				this.ownerCt.ownerCt.ownerCt.doLayout();
		}, this);
	
		var checkColumn = new GO.grid.CheckColumn({
			dataIndex: 'completed',
			width: 30,
			header: '<div class="tasks-complete-icon"></div>'
		});
  
		checkColumn.on('change', function(record, checked){
			this.store.baseParams['completed_task_id']=record.data.id;
			this.store.baseParams['checked']=checked;
  	
			this.store.reload({
				callback:function(){

					GO.tasks.tasksObservable.fireEvent('save', this, this.task_id, this.store);
				},
				scope:this
			});
  	
			delete this.store.baseParams['completed_task_id'];
			delete this.store.baseParams['checked'];
		}, this);
	
		config.paging=false,
		config.plugins=checkColumn;
		config.autoExpandColumn='task-portlet-name-col';
		config.autoExpandMax=2500;
		config.enableColumnHide=false;
		config.enableColumnMove=false;
		config.columns=[
		checkColumn,
		{
			id:'task-portlet-name-col',
			header:GO.lang['strName'],
			dataIndex: 'name',
			renderer:function(value, p, record){
				if(!GO.util.empty(record.data.description))
				{
					p.attr = 'ext:qtip="'+Ext.util.Format.htmlEncode(record.data.description)+'"';
				}
				return value;
			},
			sortable:true
		},{
			header:GO.tasks.lang.dueDate,
			dataIndex: 'due_time',
			width:100,
			sortable:true
		},{
			header:GO.tasks.lang.tasklist,
			dataIndex: 'tasklist_name',
			sortable:true,
			width:150
		}];
		config.view=new Ext.grid.GroupingView({
			scrollOffset: 2,
			//forceFit:true,
			hideGroupedColumn:true,
			emptyText: GO.tasks.lang.noTask,
			getRowClass : function(record, rowIndex, p, store){
				if(record.data.late){
					return 'tasks-late';
				}
			}
		}),
		config.sm=new Ext.grid.RowSelectionModel();
		config.loadMask=true;
		config.autoHeight=true;
	
		GO.tasks.SimpleTasksPanel.superclass.constructor.call(this, config);
	
	};

Ext.extend(GO.tasks.SimpleTasksPanel, GO.grid.GridPanel, {
	
	saveListenerAdded : false,
		
	afterRender : function()
	{
		GO.tasks.SimpleTasksPanel.superclass.afterRender.call(this);

		GO.tasks.tasksObservable.on('save',function(tasksObservable, task_id, loadedStore){
			if(this.store!=loadedStore)
				this.store.reload();
		}, this);
   
		this.on("rowdblclick", function(grid, rowClicked, e){
			GO.linkHandlers["GO_Tasks_Model_Task"].call(this, grid.selModel.selections.keys[0]);
		}, this);
			
		Ext.TaskMgr.start({
			run: function(){
				this.store.load();
			},
			scope:this,
			interval:960000
		});
	}
});


GO.mainLayout.onReady(function(){
	if(GO.summary)
	{
		var tasksGrid = new GO.tasks.SimpleTasksPanel();
		
		GO.summary.portlets['portlet-tasks']=new GO.summary.Portlet({
			id: 'portlet-tasks',
			//iconCls: 'go-module-icon-tasks',
			title: GO.tasks.lang.tasks,
			layout:'fit',
			tools: [{
				id: 'gear',
				handler: function(){
					if(!this.selectTasklistsWin)
					{
						this.selectTasklistsWin = new GO.base.model.multiselect.dialog({
							url:'tasks/portlet',
							columns:[{ header: GO.lang['strName'], dataIndex: 'name', sortable: true }],
							fields:['id','name'],
							title:GO.tasks.lang.visibleTasklists,
							model_id:GO.settings.user_id,
							listeners:{
								hide:function(){
									tasksGrid.store.reload();
								},
								scope:this
							}
						});
					}
					this.selectTasklistsWin.show();
				}
			},{
				id:'close',
				handler: function(e, target, panel){
					panel.removePortlet();
				}
			}],
			items: tasksGrid,
			autoHeight:true
		});
	}
});