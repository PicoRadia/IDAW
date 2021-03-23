const rows = [
    {
        'Nom' : 'EL HAMDOUNI',
        'Prenom' : 'radia',
        'Date de naissance' : '05/04/1999',
        "cours" : 'oui',
        'Remarques' : 'bimini bam boulash',
        'CRUD' : 'edit delete'
    },
    {
        'Nom' : 'khich',
        'Prenom' : 'Pich',
        'Date de naissance' : '03/04/2080',
        "cours" : 'non',
        'Remarques' : 'L3dess',
        'CRUD' : 'edit delete'

    },
    {
        'Nom' : 'boubou',
        'Prenom' : 'Boubler',
        'Date de naissance' : '15/03/1080',
        "cours" : 'oui',
        'Remarques' : 'R3ed',
        'CRUD' : 'edit delete'

    },


];

function fetchRows(rows){
    // Récupération de l'élement
    const elApp = document.getElementsByTagName("tbody")[0];
    elApp.innerHTML = "";
    let data = "";
    // Récupération des données
    rows.forEach((r,index) => {
      data += `<tr>
        <td>${r.Nom}</td>
        <td>${r.Prenom}</td>
        <td>${r['Date de naissance']}</td>
        <td>${r["cours"]}</td>
        <td>${r.Remarques}</td>
        <td>
        <button class="edit btn btn-sm btn-outline-success" value="${index}">Edit</button>
        <button class="delete btn btn-sm btn-outline-danger" value="${index}">Delete</button>
        </td>

      </tr>`;
    });
    document.querySelectorAll("button.delete").forEach(b => {
        b.addEventListener("click", function() {
          return deleteRow(this.value);
        })});

    // Affichage des éléments dans le HTML
    elApp.innerHTML += data;

}

// appel de la fonction
fetchRows(rows);

document
  .querySelectorAll("input[type=search]")[0]
  .addEventListener("input", search);

function search(){
    const filteredData = rows.filter(row =>
        row.Nom.toLowerCase().includes(this.value.toLowerCase())
      );
      fetchRows(filteredData);
}




document.getElementById("form-save").addEventListener("click", function() {
    // Récupération des champs
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    const datenaissance = document.getElementById("datenaissance").value;
    const cours = document.getElementById("cours").checked;
    const remarques = document.getElementById("remarques").value;
    if(cours == true){
        var val = 'oui'
    }
    else{
        var val = 'non';
    }
    
  
if (nom && prenom && datenaissance  && remarques) {
      // Nouvelle ligne
      const r =   {
        'Nom' : nom,
        'Prenom' : prenom,
        'Date de naissance' : datenaissance,
        "cours" : val,
        'Remarques' : remarques,
        
    };
       

      // Ajout de la nouvelle ligne
      rows.push(r);
      document.getElementById("nom").value = "";
      document.getElementById("prenom").value = "";
      document.getElementById("datenaissance").value = "";
      document.getElementById("remarques").value = "";
    
      // Affichage du nouveau tableau
      
      fetchRows(rows);
 
    }
});
  
    document.getElementById("form-cancel").addEventListener("click", function() {
    document.getElementById("nom").value = "";
    document.getElementById("prenom").value = "";
    document.getElementById("datenaissance").value = "";
    document.getElementById("remarques").value = "";
})




// Chaque bouton "Editer"
document.querySelectorAll("button.edit").forEach(b => {
  b.addEventListener("click", function() {
    return editRow(this.value);
  });
});

// Chaque bouton "supprimer"
document.querySelectorAll("button.delete").forEach(b => {
    b.addEventListener("click", function() {
      return deleteRow(this.value);
    });
});

function deleteRow(index) {
    rows.splice(index, 1);
    fetchRows(rows);
    // Chaque bouton "supprimer"
    document.querySelectorAll("button.delete").forEach(b => {
    b.addEventListener("click", function() {
      return deleteRow(this.value);
    });
});
}
  
function editRow(index) {
    console.log(rows[index].Remarques);
    document.getElementById("nom").value = rows[index].Nom;
    document.getElementById("prenom").value = rows[index].Prenom;
    document.getElementById("datenaissance").value = rows[index]["Date de naissance"];
    if(rows[index].cours == 'oui')
    {
        var val = true;
    }
    else{
        var val =false;
    }
    document.getElementById("cours").checked = val;
    document.getElementById("remarques").value = rows[index].Remarques;
    rows.splice(index, 1);
    fetchRows(rows);
    
}