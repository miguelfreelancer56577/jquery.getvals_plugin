# jquery.getvals_plugin

1.- Use method setValues:

* $(".ts2").setValues("2");

2.- Use method getValues:

* $("textarea").getValues();
* return a array by default or or json
* $("textarea").getValues('json');

3.- Use method clearTag:

* $(".ts2").clearTag();


4.- Use method createTagOption:

* var colec = [{id: 'dato1', text: 'description 1'}, {id: 'dato2', text: 'description 2'}];
* $("select").createTagOption({collection: colec, val: 'id', description: 'text', selection: 'dato1', clear: false})
