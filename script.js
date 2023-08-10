$(document).ready(function () {
    // Fonction pour passer à la section suivante après avoir soumis le formulaire
    function passerALaSectionSuivante() {
        var currentSection = $(".form-wrapper fieldset.section.is-active");
        var nextSection = currentSection.next("fieldset.section");
        currentSection.removeClass("is-active");
        nextSection.addClass("is-active");
        updateStepIndicator(); // Appelle la fonction pour mettre à jour l'indicateur d'étape
    }

    // Fonction pour mettre à jour l'indicateur d'étape
    function updateStepIndicator() {
        var currentSectionIndex = $(".form-wrapper fieldset.section.is-active").index();
        $(".steps li").removeClass("is-active");
        $(".steps li").eq(currentSectionIndex).addClass("is-active");
    }

    $(".form-wrapper .buttonsuivant").click(function () {
        var button = $(this);
        var currentSection = button.parents(".section");
        var currentSectionIndex = currentSection.index();
        var headerSection = $('.steps li').eq(currentSectionIndex);
        currentSection.removeClass("is-active").next().addClass("is-active");
        headerSection.removeClass("is-active").next().addClass("is-active");
    });

    $(".form-wrapper .buttonsubmit").click(function () {
        // Soumettre le formulaire via Ajax
        var formData = $(".form-wrapper").serialize();
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: formData,
            success: function (response) {
                console.log(response);
                $(".form-wrapper").addClass("submitted"); // Ajoutez une classe pour indiquer que le formulaire a été soumis

                // Passer automatiquement à la section suivante "Formulaire envoyé !" après l'envoi réussi
                passerALaSectionSuivante();
            },
            error: function (error) {
                console.error(error);
                alert("Erreur : Impossible de soumettre le formulaire. Veuillez vérifier les journaux du serveur pour plus d'informations.");
            },
        });

    });

    // Mettre à jour l'indicateur d'étape au chargement de la page
    updateStepIndicator();
});
