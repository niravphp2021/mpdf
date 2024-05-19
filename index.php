<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPageByArray([
    'margin-left' => 0,
    'margin-right' => 0,
    'margin-top' => 0,
    'margin-bottom' => 0,
]);
$mpdf->WriteHTML('
<?php ?>
<html>
    <head>

    </head>

    <body style="font-family:"Open Sans";text-align:center;margin: 0px;padding: 0px;">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:30px;">
            <tr>
                <td style="font-size:18px;font-weight:600;">General Information</td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px;">
            <tr>
                <td style="padding-bottom:15px;">1. Provide a detailed description of your firm’s business model.</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;">
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-top:15px;padding-bottom:15px;">2. Regulated instruments, products and services your firm undertakes business in (regulated or unregulated).</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="10%"><input type="checkbox" checked="checked"> Custody</td>
                            <td width="20%" align="center"><input type="checkbox"> Debt instruments</td>
                            <td width="10%"><input type="checkbox"> Equities</td>
                            <td width="25%" align="center"><input type="checkbox"> Complex instruments</td>
                            <td width="25%"><input type="checkbox" checked="checked"> Repurchase transactions</td>
                            <td width="10%"><input type="checkbox" checked="checked"> Buy-sell</td>
                        </tr>
                        <tr>
                            <td style="padding-top:10px;"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox"> Other
                            </td>
                            <td style="padding: 10px;border:1px solid #b5b0b0;" colspan="5">

                            </td>
                        </tr>

                    </table>
                 </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">3. Please list the countries in which your firm undertakes business, the domicile of its UBO and any subsidiaries of the firm.</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">4. The ownership structure of this particular entity – through to the ultimate beneficial owner(s) (natural persons) (a diagram of the
                whole legal structure would help).</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">5. Does the company have AML procedures. <br> If Yes, please provide us with a copy of the AML policy and complete the enclosed “AML Questionnaire”.</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="7%"><input type="checkbox" checked="checked"> No</td>
                            <td><input type="checkbox"> Yes</td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">6. Are any funds transfers with affiliated or related parties expected to be carried out using this account?</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="7%"><input type="checkbox" checked="checked"> No</td>
                            <td width="32%"><input type="checkbox"> Yes, please indicate turnover:</td>
                            <td style="padding: 10px;border:1px solid #b5b0b0;"></td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">7. Do other parties affiliated or related to you have an account open with Illiquidx Limited? If “Yes” please provide details below.</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="7%"><input type="checkbox" checked="checked"> No</td>
                            <td width="8%"><input type="checkbox"> Yes</td>
                            <td style="font-size:12px;">Explanatory Note: This information is collected to enable us to calculate exposures on a single risk basis taking into account situations where your financial distress
                            could lead to the financial distress of the persons affiliated or related to you and vice versa.</td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" style="border-spacing: 10px;" width="100%">
                        <tr>
                            <td width="33%">Account number</td>
                            <td width="33%">Account holder</td>
                            <td width="33%">Relationship</td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                        </tr>
                        <tr>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                            <td style="border:1px solid #b5b0b0;padding:10px;"></td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">8. Anticipated monthly and annual trading turnover, USD</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;">9. Anticipated total account balance, (total securities and funds held), USD</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-top:15px;padding-bottom:5px;">10. Size of wealth (total market value of all physical and intangible assets owned, USD)</td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;font-size:12px;">Please refer to your Financial Statements</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-bottom:15px;padding-top:15px;line-height:130%;">11.Please provide information if the UBO(s) of over 25% of share capital has (have) a second citizenship. If "yes", please specify the country and reason for the second citizenship, and choose the applicable option:</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="7%"><input type="checkbox" checked="checked"> No</td>
                            <td width="40%"><input type="checkbox"> Yes, country of the second citizenship</td>
                            <td style="padding: 10px;border:1px solid #b5b0b0;"></td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td><input type="checkbox" checked="checked"> Naturalization</td>
                            <td style="padding:5px 20px;"><input type="checkbox"> Investment program or similar</td>
                        </tr>
                    </table>
                 </td>
            </tr>
            <tr>
                <td style="border-bottom:1px solid #b5b0b0;padding-top:5px;padding-bottom:15px;"></td>
            </tr>
            <tr>
                <td style="padding-top:15px;padding-bottom:15px;">12. Please provide information on the source of funds and supporting documentation:</td>
            </tr>
            <tr>
                <td style="padding: 20px;border:1px solid #b5b0b0;"></td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 50px 20px 20px;padding:20px 5px; border:1px solid #b5b0b0;">
            <tr>
                <td width="72%" valign="middle">
                    <table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 15px;">
                        <tr>
                            <td width="65%" style="border-top:1px solid #b5b0b0;padding-top:5px;">Name(s):</td>
                            <td width="35%" style="border-top:1px solid #b5b0b0;padding-top:5px;">Signed:</td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 15px;">
                        <tr>
                            <td width="58%" style="border-top:1px solid #b5b0b0;padding-top:5px;">Position:</td>
                            <td></td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 15px;">
                        <tr>
                            <td width="65%" style="border-top:1px solid #b5b0b0;padding-top:5px;">
                                Duly authorized for and on behalf of:
                            </td>
                            <td width="35%">
                                <table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 10px 0px;">
                                    <tr>
                                        <td width="25%" style="border-top:1px solid #b5b0b0;">Date</td>
                                        <td width="25%" style="border-top:1px solid #b5b0b0;"></td>
                                        <td width="50%" style="border-top:1px solid #b5b0b0;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="28%" align="center" valign="middle" style="text-align:center; vertical-align:middle;">
                    <svg width="200" height="200">
                        <circle cx="95" cy="95" r="90" stroke="#b5b0b0" stroke-width="2" fill="none" />
                        <text x="95" y="105" font-family="Arial" font-size="14" fill="#000" text-anchor="middle">Seal</text>
                    </svg>
                </td>
            </tr>
        </table>
        <pagebreak>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 10px;padding-top:30px;">
            <tr>
                <td style="font-size:18px;font-weight:600;">Sanctions Exposure Questionnaire: Part 1</td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tr>
                <td style="font-size:15px;font-weight:bold;color:#000;" width="62%">1. Does the company have any sanctioned party as a client?</td>
                <td style="font-size:15px;font-weight:bold;color:#000;" width="7%"><input type="checkbox"> Yes</td>
                <td style="font-size:15px;font-weight:bold;color:#000;"><input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px" colspan="3">‘Sanctioned party’ means any individual or entity specified in the following lists:</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 0px 17px;line-height:140%;" colspan="3"> EU restrictive measures: <a href="#">https://data.europa.eu/euodp/data/dataset/consolidated-list-of-persons-groups-and-entities-subject-to-eufinancial-sanctions/resource/3a1d5dd6-244e-4118-82d3-db3be0554112</a></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;" colspan="3"> OFAC&apos;s Sanctions List: <a href="#"> https://www.treasury.gov/resource-center/sanctions/SDN-List/Pages/default.aspx</a></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;" colspan="3"> US Sectoral Sanctions Identifications (SSI) List:  <a href="#"> https://ofac.treasury.gov/consolidated-sanctions-list-non-sdn-lists/sectoral-sanctionsidentifications-ssi-list
                    UK HM Treasury Sanct</a></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;" colspan="3"> United Nations Security Council Sanctions List:  <a href="#"> https://www.un.org/sc/suborg/en/sanctions/un-sc-consolidated-list</a></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;" colspan="3"> OFSI  <a href="#">  https://www.gov.uk/government/publications/financial-sanctions-ukraine-sovereignty-and-territorial-integrity</a></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:500;color:#000;padding:10px 10px 15px 17px;" colspan="3"> If &apos;Yes&apos;, please specify details of the sanctioned party and explain cooperation.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;" colspan="3"></td>
            </tr>
            <tr>
                <td style="padding-top: 23px;border-bottom:1px solid #b5b0b0;" colspan="3"></td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;">2. Does the company have any sanctioned party as a business partner, counterparty, or affiliated company? &nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">If &apos;Yes&apos;, please specify details of the sanctioned party and explain cooperation.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="padding-top: 23px;border-bottom:1px solid #b5b0b0;"></td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tr>
                <td style="font-size:15px;font-weight:bold;color:#000;" width="80%">3. Does the company has any sanctioned party in the ownership structure?</td>
                <td style="font-size:15px;font-weight:bold;color:#000;" width="7%"><input type="checkbox"> Yes</td>
                <td style="font-size:15px;font-weight:bold;color:#000;"><input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px" colspan="3">If If &apos;Yes&apos;, please specify the details of the sanctioned party and the % of ownership.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;" colspan="3"></td>
            </tr>
            <tr>
                <td style="padding-top: 23px;border-bottom:1px solid #b5b0b0;" colspan="3"></td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;">4. Does the Company have, or plan to have a presence or business interest in any of the following countries: &nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;">Iran, Sudan, North Korea, Syria, Cuba, OFAC Comprehensively Sanctioned Country/Region, or with Sanctioned Parties*?</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">If &apos;Yes&apos;, please specify the details of the sanctioned party and the % of ownership.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>

          </table>
          <pagebreak>
          <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
          <tr>
                <td style="padding-top: 20px;">If &apos;Yes&apos;,  please explain and include the following:</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td width="2%">-</td>
                            <td>Relevant OFAC Comprehensively Sanctioned Country/Region.</td>
                        </tr>
                        <tr>
                            <td width="2%">-</td>
                            <td>Products, goods, or services involved.</td>
                        </tr>
                        <tr>
                            <td width="2%">-</td>
                            <td>Legal name(s) of any subsidiaries/affiliates involved and confirm whether the subsidiaries/affiliates have a relationship with Illiquidx
                            Limited.
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">-</td>
                            <td>Whether activity is under an OFAC specific or general license or other government authorization and specify number/reference.</td>
                        </tr>
                        <tr>
                            <td width="2%">-</td>
                            <td>Provide name of Sanctioned Party* if applicable.</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="padding-top: 20px;font-weight:bold;">If the response to Q4 is &apos;Yes&apos;, complete the table below.</td>
            </tr>        
            <tr>
                <td style="padding-top: 23px; border-bottom:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">5. Does the Company have, or plan to have, a presence or business interest in Crimea/Sevastopol Regions?</td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please provide the details.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">6. Do you screen your clients, business parties, counterparties against sanction lists on onboarding and during the customer
                life cycle?</td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please provide the details.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">7. Do you screen your clients&apos; transactions against sanction lists? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please specify the lists, the providers of your sanction lists and summary of the controls.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">8. Will any transactions executed with us end up benefiting a sanctioned party? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
            </tr>
            <tr>
                <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
            </tr>
            <tr>
                <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
            </tr>
            <tr>
                <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
            </tr>
            </table>
            <pagebreak>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">9. Have a director, senior officer, or 10% or greater owner or shareholder who is any of the following:</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;padding-top:5px;">- a resident of an OFAC Comprehensively Sanctioned Country/Region;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- employed or representing a governmental agency, or authority of an OFAC Comprehensively Sanctioned Country/Region,
                    or Venezuela;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- a person who is a Sanctioned Party? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
                <tr>
                    <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
                </tr>
                <tr>
                    <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
                </tr>
                <tr>
                    <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">10. Have</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;padding-top:5px;">- a physical presence in;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- conducted, or planned to conduct business activity involving Russia/Belarus targeted by Sanctions</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- planned any new investment in Russia/Belarus (including any JV or other minority investment)?</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;text-align:right;padding-right:25px;padding-top:10px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
                <tr>
                    <td style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
                </tr>
                <tr>
                    <td style="padding: 40px;border:1px solid #b5b0b0;"></td>
                </tr>
                <tr>
                    <td style="padding-top: 26px;border-bottom:1px solid #b5b0b0;"></td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top:30px;">If the response to either Q4 or Q9 is &apos;Yes&apos;, the supplemental questions below are required to be completed.</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">If the response to Q10 is &apos;Yes&apos;, the Sanction Customer Questionnaire - Russia/Belarus Annex below is required to be completed.</td>
                </tr>
            </table>
            <pagebreak>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td align="center" style="font-size:18px;color:#000;line-height:140%;padding-top: 23px;">Supplemental Questions (only required if either Q4 or Q9 have &apos;Yes&apos; as a response)</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top: 30px;">List the total approximate percentage of revenue generated or anticipated, either directly or indirectly, through the customer or its subsidiaries
                    or affiliates from operations, sales, services, contracts or any other transactions with persons, entities, or the government (including
                    government-owned entities, agencies and instrumentalities) in an OFAC Comprehensively Sanctioned Country/Region or who are otherwise
                    Sanctioned Parties (excluding Sectoral Sanctions).</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top: 20px;">Check all that apply and provide approximate % revenue for each jurisdiction or Sanctioned Party</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 20px 20px;padding-left:20px;">
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Crimea/DNR</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Cuba</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Sanctioned Party Revenue</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Iran, Islamic Republic of</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Syrian Arab Republic</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
                <tr>
                    <td width="3%" style="verticle-align:middle;"><input type="checkbox" /></td>
                    <td width="37%" style="font-size:14px;color:#000;verticle-align:middle;">Korea Democratic People’s Republic of</td>
                    <td width="20%" style="border-bottom:1px solid;font-size:14px;color:#000;verticle-align:middle;"></td>
                    <td width="40%" style="font-size:14px;color:#000;verticle-align:middle;">%</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top: 15px;">If the customer has business dealings in an OFAC Comprehensively Sanctioned Country/Region or with a Sanctioned Party, is this activity
                    segregated from their Illiquidx relationship?</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top: 5px;padding-right:40px; text-align:right;"><input type="checkbox"> &nbsp;Yes &nbsp;&nbsp;<input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td width="50%" style="font-size:14px;color:#000;line-height:140%;padding:20px 0px 20px 20px;verticle-align:middle;">
                    If &apos;No&apos;, please explain how the activity is not segregated and is being
                    facilitated through the Illiquidx relationship, including details of any
                    relevant controls, policies, and procedures. If applicable, please
                    provide license details and a copy of the license, if under an OFAC
                    specific license or governmental license.<br>
                    Please note, no activity related to Sanctions should be facilitated via
                    the Illiquidx relationship without prior approval directly from Illiquidx,
                    even if authorized under a local regulation.
                    </td>
                    <td width="50%" style="border:1px solid;verticle-align:middle;"></td>
                </tr>
            </table>
            <pagebreak>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:50px;">
                <tr>
                    <td align="center" style="font-size:18px;color:#000;line-height:140%;padding-top: 23px;">Sanctions Customer Questionnaire - Russia/Belarus Annex (only required if Q10 has
                    &apos;Yes&apos; as a response)</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;padding-top: 30px;">Please respond Yes/No and provide a detailed explanation at the bottom of this Annex.</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:10px;">
            
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">A.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;"> Please confirm that the customer has conducted an evaluation of all assets and operations to identify any dealings in Russia/Belarus, or
                    with any Russian/Belarusian entities, and otherwise for compliance with sanctions imposed on Russia/Belarus and related entities</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">B.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;"> Does the customer do any business with any ministry, agency, state-owned entity, or sovereign fund of the Russian Federation (Central
                    Bank of Russia, the National Wealth Fund, the Ministry of Finance of the Russian Federation, etc.)?</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">B.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;"> Does the customer do any business with any ministry, agency, state-owned entity, or sovereign fund of the Russian Federation (Central
                    Bank of Russia, the National Wealth Fund, the Ministry of Finance of the Russian Federation, etc.)?</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">C.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Does the customer have dealings in Russia/Belarus or with any Russian/Belarusian entities, including, the following sectors:</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 0px 20px 50px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">a. Energy (including Petrochemical);</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">b. Metals (including Gold, Iron, and Steel) and mining;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">c. Defense/military;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">d. Luxury goods;</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">e. Transportation; or</td>
                </tr>
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;">f. Any sector involving goods controlled by EU, UK, and U.S. Trade Sanctions targeting Russia and Belarus</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">D.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">If involved in the oil/petroleum sector or an industry connected to transactions involving oil/petroleum of Russian origin, does the customer
                    have policies, procedures, and controls for complying with the oil price caps determinations issued by the US/EU/UK? </td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">E.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Does the customer provide any accounting, trust or corporate formation services, or management consulting services in Russia or to
                    persons located in Russia? </td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">F.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Does the customer rely on any general or specific license(s) related to dealings in Russia or Belarus? If yes, please describe the nature
                    of the general or specific license(s) and the activity for which it must be relied upon. </td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">G.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Has the customer applied for, or does it intend to apply for, any Specific Licenses related to dealings in Russia or Belarus? If yes, please
                    describe the nature of the Specific License, the purpose for which it was requested and the status of the application.</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <pagebreak>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:30px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">H.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Will any part of the Illiquidx relationship be used directly or indirectly to fund any activities or business of or with any individual or entity,
                    resident/located/ operating/organized/domiciled in Russia/Belarus, or an entity owned such a party, or acting on behalf or at the direction
                    of such a party?</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td style="font-size:14px;color:#000;line-height:140%;vertical-align: top;" rowspan="2" width="2%">I.</td>
                    <td style="font-size:14px;color:#000;line-height:140%;">Other than as discussed above, has the customer or, to the customer&apos;s knowledge, any of its or any of its subsidiaries&apos; or affiliates&apos;
                    directors, officers, employees, agents or affiliates, taken any action that has resulted or may result in a violation of compliance with
                    sanctions imposed on Russia/Belarus and related entities? If yes, provide details.</td>
                </tr>
                <tr>
                    <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-right:130px;"><input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No</td>
                </tr>
            </table>
    <body>
</html>

');
$mpdf->Output();
