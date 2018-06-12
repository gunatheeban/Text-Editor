function textStylesChange(replacementText) {
    var span = document.createElement(replacementText);

    changer(span);
}

function textSizeChange(changeSize){
    var span = document.createElement("span");
    span.style.fontsize(changeSize);
    
    changer(span);
}

function changer(span){
    if (window.getSelection) {
        var sel = window.getSelection();
        if (sel.rangeCount) {
            var range = sel.getRangeAt(0).cloneRange();
            range.surroundContents(span);
            sel.removeAllRanges();
            sel.addRange(range);
        }
    }
}