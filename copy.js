function copyCodeToClipboard(event) {
    const btn = event.target;
    const parent = event.target.parentNode;
    const code = parent.querySelector('code');
    const range = document.createRange();
    range.selectNode(code);
    window.getSelection().removeAllRanges(); // clear current selection
    window.getSelection().addRange(range); // to select text
    document.execCommand("copy");
    window.getSelection().removeAllRanges();// to deselect

    btn.innerText = "Copied!";
    setTimeout(() => {
        btn.innerText = "Copy";
    }, 1000);
}