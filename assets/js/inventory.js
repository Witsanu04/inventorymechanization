const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", function(){

  const value = this.value.toLowerCase();

  const rows = document.querySelectorAll("#inventoryTable tr");

  rows.forEach((row)=>{

    if(row.innerText.toLowerCase().includes(value)){
      row.style.display = "";
    }
    else{
      row.style.display = "none";
    }

  });

});