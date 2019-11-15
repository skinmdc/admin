
Runner.buttonEvents["Deactivate_User"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Deactivate_User';if(!pageObj.buttonEventBefore['Deactivate_User']){pageObj.buttonEventBefore['Deactivate_User']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){}}
if(!pageObj.buttonEventAfter['Deactivate_User']){pageObj.buttonEventAfter['Deactivate_User']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){}}
$('a[id="Deactivate_User"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Deactivate_User"+"_"+Runner.genId();var button_Deactivate_User=new Runner.form.Button({id:this.id,btnName:"Deactivate_User"});button_Deactivate_User.init({args:[pageObj,proxy,pageid]});});};