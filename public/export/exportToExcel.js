function exportToExcel(tableId) {
    let tableData = document.getElementById(tableId).outerHTML;
    tableData = tableData.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
    tableData = tableData.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
    tableData = tableData;

    let a = document.createElement("a");
    var BOM = "\uFEFF";
    a.href = `data:application/vnd.ms-excel, ${encodeURIComponent(
        BOM + tableData
    )}`;
    a.download = "tes_" + getRandomNumbers() + ".xls";
    a.click();
}
function getRandomNumbers() {
    let dateObj = new Date();
    let dateTime = `${dateObj.getHours()}${dateObj.getMinutes()}${dateObj.getSeconds()}`;

    return `${dateTime}${Math.floor(Math.random().toFixed(2) * 100)}`;
}
