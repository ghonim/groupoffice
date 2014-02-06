/** 
 * Copyright Intermesh
 * 
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 * 
 * If you have questions write an e-mail to info@intermesh.nl
 * 
 * @version $Id: ModuleSettingsDialog.js 14816 2013-05-21 08:31:20Z mschering $
 * @copyright Copyright Intermesh
 * @author Wesley Smits <wsmits@intermesh.nl>
 */
 
GO.sites.ModuleSettingsDialog = Ext.extend(GO.dialog.TabbedFormDialog , {
	
	initComponent : function(){
		
		Ext.apply(this, {
			goDialogId:'sitesModuleSettings',
			title:GO.sites.lang.moduleSettings,
			formControllerUrl: 'sites/contentBackend'
		});
		
		GO.sites.PageDialog.superclass.initComponent.call(this);	
	},
	
	buildForm : function () {
		
		this.propertiesPanel = new Ext.Panel({
			title:GO.sites.lang.globalProperties,			
			cls:'go-form-panel',
			layout:'form',
			items:[]
		});

		this.addPanel(this.propertiesPanel);
	}
});