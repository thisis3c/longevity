!function(){"undefined"!=typeof gdlr_core_shortcodes&&tinymce.PluginManager.add("gdlr_core",function(e,o){var r=[];for(var t in gdlr_core_shortcodes)if(gdlr_core_shortcodes[t]){var n={};n.text=gdlr_core_shortcodes[t].title,n.value=gdlr_core_shortcodes[t].value,n.onclick=function(){e.insertContent(this.value())},r.push(n)}e.addButton("gdlr_core",{text:"GDLR Core",type:"menubutton",icon:!1,menu:r})})}();