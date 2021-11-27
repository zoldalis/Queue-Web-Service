

var array = new CustomArray([]);


function addElemHandler() 
{
        debugger;
        let text = document.getElementById("text").value;
    let option = document.getElementById("option").value;
    if(text && option) 
    {
        let elem = new ListElement(text,option);
        array.addElement(elem);    
    }
    debugger;
}

function shakeHandler() 
{
    array.shakeElements();
}

function printPropHandler() {
    let elem =  array.getLast();
    if(elem)
        console.log(elem.toString());
}

function printAllHandler(params) 
{
    array.printAll();    
}