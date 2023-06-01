<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe", uniqueConstraints={@ORM\UniqueConstraint(name="uk_societe_code_fournisseur", columns={"code_fournisseur", "entity"}), @ORM\UniqueConstraint(name="uk_societe_barcode", columns={"barcode", "fk_barcode_type", "entity"}), @ORM\UniqueConstraint(name="uk_societe_prefix_comm", columns={"prefix_comm", "entity"}), @ORM\UniqueConstraint(name="uk_societe_code_client", columns={"code_client", "entity"})}, indexes={@ORM\Index(name="idx_societe_typent", columns={"fk_typent"}), @ORM\Index(name="idx_societe_shipping_method", columns={"fk_shipping_method"}), @ORM\Index(name="idx_societe_user_creat", columns={"fk_user_creat"}), @ORM\Index(name="idx_societe_stcomm", columns={"fk_stcomm"}), @ORM\Index(name="idx_societe_account", columns={"fk_account"}), @ORM\Index(name="idx_societe_forme_juridique", columns={"fk_forme_juridique"}), @ORM\Index(name="idx_societe_user_modif", columns={"fk_user_modif"}), @ORM\Index(name="idx_societe_pays", columns={"fk_pays"}), @ORM\Index(name="idx_societe_prospectlevel", columns={"fk_prospectlevel"})})
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=128, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_alias", type="string", length=128, nullable=true)
     */
    private $nameAlias;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_int", type="string", length=255, nullable=true)
     */
    private $refInt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true)
     */
    private $statut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true, options={"default"="1"})
     */
    private $status = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_client", type="string", length=24, nullable=true)
     */
    private $codeClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_fournisseur", type="string", length=24, nullable=true)
     */
    private $codeFournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_compta", type="string", length=24, nullable=true)
     */
    private $codeCompta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_compta_fournisseur", type="string", length=24, nullable=true)
     */
    private $codeComptaFournisseur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=25, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="town", type="string", length=50, nullable=true)
     */
    private $town;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_departement", type="integer", nullable=true)
     */
    private $fkDepartement = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=true)
     */
    private $fkPays = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socialnetworks", type="text", length=65535, nullable=true)
     */
    private $socialnetworks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=true)
     */
    private $skype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linkedin", type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instagram", type="string", length=255, nullable=true)
     */
    private $instagram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="snapchat", type="string", length=255, nullable=true)
     */
    private $snapchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="googleplus", type="string", length=255, nullable=true)
     */
    private $googleplus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="youtube", type="string", length=255, nullable=true)
     */
    private $youtube;

    /**
     * @var string|null
     *
     * @ORM\Column(name="whatsapp", type="string", length=255, nullable=true)
     */
    private $whatsapp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_effectif", type="integer", nullable=true)
     */
    private $fkEffectif = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_typent", type="integer", nullable=true)
     */
    private $fkTypent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_forme_juridique", type="integer", nullable=true)
     */
    private $fkFormeJuridique = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_currency", type="string", length=3, nullable=true)
     */
    private $fkCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siren", type="string", length=128, nullable=true)
     */
    private $siren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siret", type="string", length=128, nullable=true)
     */
    private $siret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ape", type="string", length=128, nullable=true)
     */
    private $ape;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idprof4", type="string", length=128, nullable=true)
     */
    private $idprof4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idprof5", type="string", length=128, nullable=true)
     */
    private $idprof5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idprof6", type="string", length=128, nullable=true)
     */
    private $idprof6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tva_intra", type="string", length=20, nullable=true)
     */
    private $tvaIntra;

    /**
     * @var float|null
     *
     * @ORM\Column(name="capital", type="float", precision=24, scale=8, nullable=true)
     */
    private $capital;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_stcomm", type="integer", nullable=false)
     */
    private $fkStcomm = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefix_comm", type="string", length=5, nullable=true)
     */
    private $prefixComm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="client", type="boolean", nullable=true)
     */
    private $client = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="fournisseur", type="boolean", nullable=true)
     */
    private $fournisseur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_account", type="string", length=32, nullable=true)
     */
    private $supplierAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_prospectlevel", type="string", length=12, nullable=true)
     */
    private $fkProspectlevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_incoterms", type="integer", nullable=true)
     */
    private $fkIncoterms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_incoterms", type="string", length=255, nullable=true)
     */
    private $locationIncoterms;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_bad", type="boolean", nullable=true)
     */
    private $customerBad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="customer_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $customerRate = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="supplier_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $supplierRate = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_client", type="float", precision=10, scale=0, nullable=true)
     */
    private $remiseClient = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_supplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $remiseSupplier = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mode_reglement", type="boolean", nullable=true)
     */
    private $modeReglement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cond_reglement", type="boolean", nullable=true)
     */
    private $condReglement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="transport_mode", type="boolean", nullable=true)
     */
    private $transportMode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mode_reglement_supplier", type="boolean", nullable=true)
     */
    private $modeReglementSupplier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cond_reglement_supplier", type="boolean", nullable=true)
     */
    private $condReglementSupplier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="transport_mode_supplier", type="boolean", nullable=true)
     */
    private $transportModeSupplier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_shipping_method", type="integer", nullable=true)
     */
    private $fkShippingMethod;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tva_assuj", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tvaAssuj = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="localtax1_assuj", type="boolean", nullable=true)
     */
    private $localtax1Assuj = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_value", type="float", precision=6, scale=3, nullable=true)
     */
    private $localtax1Value;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="localtax2_assuj", type="boolean", nullable=true)
     */
    private $localtax2Assuj = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_value", type="float", precision=6, scale=3, nullable=true)
     */
    private $localtax2Value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=180, nullable=true)
     */
    private $barcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_barcode_type", type="integer", nullable=true)
     */
    private $fkBarcodeType = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_level", type="integer", nullable=true)
     */
    private $priceLevel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="outstanding_limit", type="float", precision=24, scale=8, nullable=true)
     */
    private $outstandingLimit;

    /**
     * @var float|null
     *
     * @ORM\Column(name="order_min_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $orderMinAmount;

    /**
     * @var float|null
     *
     * @ORM\Column(name="supplier_order_min_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $supplierOrderMinAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_lang", type="string", length=6, nullable=true)
     */
    private $defaultLang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_squarred", type="string", length=255, nullable=true)
     */
    private $logoSquarred;

    /**
     * @var string|null
     *
     * @ORM\Column(name="canvas", type="string", length=32, nullable=true)
     */
    private $canvas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="webservices_url", type="string", length=255, nullable=true)
     */
    private $webservicesUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="webservices_key", type="string", length=128, nullable=true)
     */
    private $webservicesKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
