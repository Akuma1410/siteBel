// JavaScript pour ouvrir et fermer la modale
 function showCustomModal(modalId, imgElement) {
    var modal = document.getElementById(modalId);
    var modalContent = modal.querySelector('.custom-modal-content');

    var imgWidth = imgElement.clientWidth;
    var imgHeight = imgElement.clientHeight;

    modal.style.width = imgWidth + 'px';

    modalContent.style.width = '100%';
    modalContent.style.height = '100%';

    modal.style.display = "block";

    // Ajout de la fonctionnalité de défilement de la modale en cliquant sur l'image
    imgElement.addEventListener('wheel', function(event) {
        event.preventDefault();
        modal.scrollTop += event.deltaY;
    });
}

function hideCustomModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

function openModal(modalId) {
    var modal = new bootstrap.Modal(document.getElementById(modalId));
    modal.show();
}

function closeModal(modalId) {
    var modal = new bootstrap.Modal(document.getElementById(modalId));
    modal.hide();
}

// JavaScript pour ouvrir et fermer la modale au survol
//function showCustomModal(modalId) {
  //  var modal = document.getElementById(modalId);
    //modal.style.display = "block";
//}

//function hideCustomModal(modalId) {
  //  var modal = document.getElementById(modalId);
  //  modal.style.display = "none";
//}
