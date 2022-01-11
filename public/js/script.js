function ShowHideDiv() {
    $('input.radioTrans').change(function() {

        if ($(this).val() == '1') {
            $("#inscriptionTrans").css("display", "inline");
            $("#inscriptionTrans").css("margin-top", "1.5rem");
            $("#transDivInscr").css("display", "block");
            $("#btnTrajet").css("display", "block");


        } else {
            $("#transDivInscr").css("display", "none");
            $("div#inscriptionTrans").css("display", "none");
            $("#btnTrajet").css("display", "none");
        }

    })
}

function ShowHideDivProfile() {
    $('input.radioTransp').change(function() {

        if ($(this).val() == '1') {
            $("#addTrajet").css("display", "block");
            $("#btnTrajetP").css("display", "block");
            $("#profileTrans").css("display", "block");

        } else {
            $("#addTrajet").css("display", "none");
            $("#btnTrajetP").css("display", "none");
            $("#profileTrans").css("display", "none");
        }

    })
}
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////
function addTrajet() {

    var btn = document.getElementById('btnTrajet');
    var form = document.getElementById('inscriptionTrans');
    var addInput = function() {


        var br = document.createElement("br");
        var text = document.createElement("p");
        text.textContent = "-";
        var labelD = document.createElement("label");
        labelD.textContent = "Départ :";
        var inputD = document.createElement("input");
        inputD.type = 'number';
        inputD.name = 'depart[]';
        inputD.placeholder = '1';
        inputD.max = '48';
        inputD.min = '1';
        inputD.required = true;

        var labelA = document.createElement("label");
        labelA.textContent = "Arrivée :";
        var inputA = document.createElement("input");
        inputA.type = 'number';
        inputA.name = 'arrivee[]';
        inputA.placeholder = '1';
        inputA.max = '48';
        inputA.min = '1';
        inputA.required = true;
        form.appendChild(labelD);
        form.appendChild(inputD);
        form.appendChild(labelA);
        form.appendChild(inputA);
        text.appendChild(br);
        form.appendChild(text);

    };
    btn.addEventListener('click', function() {
        addInput();
    }.bind(this));
}
///////////////////////////////

// add input pour entrer les trajet dans le profil
function addInput() {

    var form = document.getElementById('profileTrans');
    var br = document.createElement("br");
    var text = document.createElement("p");
    text.textContent = "-";
    var labelD = document.createElement("label");
    labelD.textContent = "Départ :";
    var inputD = document.createElement("input");
    inputD.type = 'number';
    inputD.name = 'depart[]';
    inputD.placeholder = '1';
    inputD.max = '48';
    inputD.min = '1';
    inputD.required = true;
    var labelA = document.createElement("label");
    labelA.textContent = "Arrivée :";
    var inputA = document.createElement("input");

    inputA.type = 'number';
    inputA.name = 'arrivee[]';
    inputA.placeholder = '1';
    inputA.max = '48';
    inputA.min = '1';
    inputA.required = true;
    form.appendChild(labelD);
    form.appendChild(inputD);
    form.appendChild(labelA);
    form.appendChild(inputA);
    text.appendChild(br);
    form.appendChild(text);
}
////////////////////


function initialiser() {
    // ****************************************************************
    //  var titre = location.search.split('titre=')[1]
    ShowHideDivProfile();
    ShowHideDiv();
    addTrajet();
}

$(document).ready(function() {
    initialiser();
});