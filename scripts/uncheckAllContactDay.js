function uncheckAllContactDay() {
    check(false);
    checkContactDay();
    // reassign click event handler
    console.log('ahahaha');
    this.onclick = checkAllContactDay;
}
