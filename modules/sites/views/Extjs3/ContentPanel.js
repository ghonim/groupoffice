/** 
 * Copyright Intermesh
 * 
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 * 
 * If you have questions write an e-mail to info@intermesh.nl
 * 
 * @version $Id: ContentPanel.js 14816 2013-05-21 08:31:20Z mschering $
 * @copyright Copyright Intermesh
 * @author Merijn Schering <mschering@intermesh.nl>
 */
 
GO.sites.ContentPanel = Ext.extend(GO.grid.GridPanel,{

	editDialogClass:GO.sites.ContentDialog,
	relatedGridParamName:'site_id',
	
	load : function(site_id){
		this.store.baseParams.site_id=site_id;
		this.store.load();
	},
	constructor : function(config){
		config = config || {};
		
		config.id='sites-content';
		config.title = GO.sites.lang.content;
		config.layout='fit';
		config.autoScroll=true;
		config.split=true;
		config.store = new GO.data.JsonStore({
			url: GO.url('sites/content/store'),		
			fields: ['id','title','slug'],
			baseParams:{
				site_id:0
			},
			remoteSort: true,
			model:"GO_Sites_Model_Content"
		});
	
		config.columns=[
		{
			header: GO.sites.lang.contentTitle,
			dataIndex: 'title',
			sortable: true
		},
		{
			header: GO.sites.lang.contentSlug,
			dataIndex: 'slug',
			sortable: true			
		}
		];
	
		config.view=new Ext.grid.GridView({
			autoFill: true,
			forceFit: true,
			emptyText: GO.lang['strNoItems']		
		});
	
		config.sm=new Ext.grid.RowSelectionModel();
		config.loadMask=true;
		
		config.standardTbar=true;
		
		
		config.enableDragDrop=true;
		config.ddGroup='sitesContentDD';


		GO.sites.ContentPanel.superclass.constructor.call(this, config);
	},
	
	afterRender : function(){
		
//		GO.customfields.CategoriesPanel.superclass.afterRender.call(this);
		GO.sites.ContentPanel.superclass.afterRender.call(this);
		//enable row sorting
		var DDtarget = new Ext.dd.DropTarget(this.getView().mainBody, 
		{
			ddGroup : 'sitesContentDD',
			copy:false,
			notifyDrop : this.notifyDrop.createDelegate(this)
		});
	},
	
	notifyDrop : function(dd, e, data)
	{
		var sm=this.getSelectionModel();
		var rows=sm.getSelections();
		var dragData = dd.getDragData(e);
		var cindex=dragData.rowIndex;
		if(cindex=='undefined')
		{
			cindex=this.store.data.length-1;
		}	
		
		for(i = 0; i < rows.length; i++) 
		{								
			var rowData=this.store.getById(rows[i].id);
			
			if(!this.copy){
				this.store.remove(this.store.getById(rows[i].id));
			}
			
			this.store.insert(cindex,rowData);
		}
		
		//save sort order							
		var records = [];
  	for (var i = 0; i < this.store.data.items.length;  i++)
  	{			    	
			records.push({id: this.store.data.items[i].get('id'), sort_index : i});
  	}
  	

		GO.request({
			url:'sites/content/saveSort',
			params:{
				content:Ext.encode(records)
			}
		})
		
	}
	
});

