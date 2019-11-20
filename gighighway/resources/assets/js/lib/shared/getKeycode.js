/************************* Get Keycode - Start ************************/

function getKeycode(e) {
    lastErroredCallTrace += "->getKeycode";

    try
    {
        return e.which;
    }
    catch (err)
    {
        return 0;
    }

    //var blnDOM = false, blnIE4 = false, blnNN4 = false;

    //if (document.layers) blnNN4 = true;
    //else if (document.all) blnIE4 = true;
    //else if (document.getElementById) blnDOM = true;

    //if (blnNN4) {
    //    var NN4key = e.which;
    //    return NN4key;
    //}
    //if (blnDOM) {
    //    var blnkey = e.which;
    //    return blnkey;
    //}
    //if (blnIE4) {
    //    var IE4key = event.keyCode;
    //    return IE4key;
    //}
}

/************************* Get Keycode - End ************************/

