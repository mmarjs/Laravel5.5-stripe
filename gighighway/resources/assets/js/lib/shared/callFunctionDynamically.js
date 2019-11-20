/************************* CallFunctionDynamically - Start ************************/

//These global variables exist to allow variables to be passed from one function call to another function that is called dynamically, which cannot be simply passed (e.g. callFunctionDynamically). Nested objects get lost in the jsonResult when passed in the argument array when using the js "apply" feature.
var lastRequestingElement;
var lastJsonResult;
var lastTargetElementID;

function callFunctionDynamically(functionName, requestingElement, jsonResult, targetElementId) {
    lastErroredCallTrace = "callFunctionDynamically->" + functionName;

    lastErroredFunctionName = functionName;
    lastErroredRequestingElement = requestingElement;

    try {
        lastRequestingElement = requestingElement;
        lastJsonResult = jsonResult;
        lastTargetElementID = targetElementId;
        return executeFunctionByName(functionName, window, jsonResult, targetElementId, requestingElement);
    }
    catch (err) {
        try {
            return eval(functionName + "();"); // Fallback in case executeFunctionByName fails
        }
        catch(e)
        {
         errorOnAjaxRequest(null, err, "Error on callFunctionDynamically:" + functionName);   
        }        
    }
}

function executeFunctionByName(functionName, context /*, args */) {
    if (context === undefined) context = window;
    var args = Array.prototype.slice.call(arguments, 2);
    var namespaces = functionName.split(".");
    var func = namespaces.pop();
    for (var i = 0; i < namespaces.length; i++) {
        context = context[namespaces[i]];
    }
    return context[func].apply(context, args);
}

/************************* CallFunctionDynamically - End ************************/

