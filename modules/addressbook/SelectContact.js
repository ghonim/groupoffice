/** 
 * Copyright Intermesh
 * 
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 * 
 * If you have questions write an e-mail to info@intermesh.nl
 * 
 * @copyright Copyright Intermesh
 * @version $Id: SelectContact.js 15270 2013-07-18 14:00:15Z wilmar1980 $
 * @author Merijn Schering <mschering@intermesh.nl>
 */


GO.addressbook.SelectContact = function(config){

	if(!config.displayField)
		config.displayField='name';
	
	if(!config.valueField)
		config.valueField='id';

		config.tpl = '<tpl for="."><div class="x-combo-list-item">{' + config.displayField + '} ({ab_name}) <tpl if="department">({department})</tpl> <tpl if="go_user_id&gt;0"><div class="go-model-icon-GO_Base_Model_User" style="width:16px;height:16px;display:inline-block;vertical-align:middle"></div></tpl></div></tpl>';

	var fields = {fields: ['id', 'cf', 'name', 'salutation', 'email', 'first_name', 'middle_name','last_name', 'home_phone', 'work_phone', 'cellular', 'company_id','company_name','address','address_no','zip','city','state','country','ab_name','go_user_id','department'], columns:[]};
	if(GO.customfields)
	{
		GO.customfields.addColumns("GO_Addressbook_Model_Contact", fields);
	}
	
	config.store = new GO.data.JsonStore({
	    url: GO.url("addressbook/contact/selectContact"),
	    baseParams: {	    	
				addressbook_id : config.addressbook_id,
				requireEmail: config.requireEmail ? '1' : '0',
				no_user_contacts: config.noUserContacts ? '1' : '0'
			},
	    totalProperty:'total',	    
      fields: fields.fields,
	    remoteSort: true
	});
	
	config.store.setDefaultSort('name', 'asc');

	config.triggerAction='all';
	config.selectOnFocus=true;
	//config.pageSize=parseInt(GO.settings['max_rows_list']);

	GO.addressbook.SelectContact.superclass.constructor.call(this,config);
	
}
Ext.extend(GO.addressbook.SelectContact, GO.form.ComboBoxReset);

Ext.ComponentMgr.registerType('selectcontact', GO.addressbook.SelectContact);