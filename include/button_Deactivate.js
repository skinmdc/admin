
Runner.buttonEvents["Deactivate"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Deactivate';if(!pageObj.buttonEventBefore['Deactivate']){pageObj.buttonEventBefore['Deactivate']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){}}
if(!pageObj.buttonEventAfter['Deactivate']){pageObj.buttonEventAfter['Deactivate']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var message=result["txt"];ctrl.setMessage(message);}}
$('a[id="Deactivate"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Deactivate"+"_"+Runner.genId();var button_Deactivate=new Runner.form.Button({id:this.id,btnName:"Deactivate"});button_Deactivate.init({args:[pageObj,proxy,pageid]});});};