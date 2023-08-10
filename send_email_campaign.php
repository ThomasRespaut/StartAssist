<?php
// Inclure la biblioth�que Brevo
require_once(__DIR__ . "/APIv3-php-library/autoload.php");

// D�finir votre cl� d'API
Sendinblue\Client\Configuration::getDefaultConfiguration()->setApiKey("api-key", "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");

// Instancier le client EmailCampaignsApi
$api_instance = new Sendinblue\Client\Api\EmailCampaignsApi();

// Cr�er la campagne e-mail
$emailCampaigns = new \Sendinblue\Client\Model\CreateEmailCampaign();

// D�finir les param�tres de la campagne
$emailCampaigns->setName("Campagne envoy�e via l'API");
$emailCampaigns->setSubject("Mon sujet");
$emailCampaigns->setSender(array("name" => "Nom de l'exp�diteur", "email" => "monemail@monentreprise.com"));
$emailCampaigns->setType("classic");

// Contenu qui sera envoy�
$emailCampaigns->setHtmlContent("F�licitations ! Vous avez r�ussi � envoyer cette campagne exemple via l'API Sendinblue.");

// S�lectionner les destinataires
$emailCampaigns->setRecipients(array("listIds" => [2, 7]));

// Planifier l'envoi dans une heure (Remarque : la valeur de "scheduledAt" doit �tre une date et heure future valide)
$emailCampaigns->setScheduledAt("2023-07-26 12:00:00");

// Faire l'appel API pour cr�er la campagne e-mail
try {
    $result = $api_instance->createEmailCampaign($emailCampaigns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception lors de l\'appel � EmailCampaignsApi->createEmailCampaign : ', $e->getMessage(), PHP_EOL;
}
?>
