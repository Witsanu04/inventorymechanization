const sheetID = "1ZaWf8sYX0wC7ege0evyj9R2EIsA5nUOROprzCPdscmE";
const sheetName = "Store KP";

const url = `https://opensheet.elk.sh/${sheetID}/${sheetName}`;

async function loadData() {

    const response = await fetch(url);
    const data = await response.json();

    const table = document.getElementById("tableBody");

    table.innerHTML = "";

    data.forEach(item => {

        table.innerHTML += `
            <tr>

                <td>
                    <img src="${item.Image}" width="60">
                </td>

                <td>${item["Item ID"] || "-"}</td>
                <td>${item.Plant || "-"}</td>
                <td>${item.Location || "-"}</td>
                <td>${item.Shelf || "-"}</td>
                <td>${item.Brand || "-"}</td>
                <td>${item.Category || "-"}</td>
                <td>${item.Matcode || "-"}</td>
                <td>${item.Description || "-"}</td>
                <td>${item["Unit Rate"] || "-"}</td>
                <td>${item.Total || "-"}</td>
                <td>${item.Unit || "-"}</td>
                <td>${item.Amount || "-"}</td>

            </tr>
        `;
    });

}

loadData();