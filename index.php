<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPageByArray([
    'margin-left' => 0,
    'margin-right' => 0,
    'margin-top' => 0,
    'margin-bottom' => 0,
]);
$mpdf->WriteHTML('<html><head><script type="text/javascript">if (top != self) {top.location.href = self.location.href;}</script><script type="text/javascript">var csrfMagicToken = "sid:c375fbdc87b849ed2a034e4203e7aa67931fe6a0,1716311167";var csrfMagicName = "__vtrftk";</script><script src="libraries/csrf-magic/csrf-magic.js" type="text/javascript"></script></head>
<body style="text-align:center;margin: 0px;padding: 0px;width: 100%;font-family: sans-serif;font-size: 15px">
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:30px;">
        <tbody><tr>
            <td style="font-size:18px;font-weight:600;"><b>General Information</b></td>
        </tr>
    </tbody></table>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px;">
        <tbody><tr>
            <td style="padding-bottom:15px;">1. Provide a detailed description of your firm’s business model.</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">Please list the countries in which your firm undertakes business, the domicile of its UBO and any subsidiaries of the firm</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-top:15px;padding-bottom:15px;">2. Regulated instruments, products and services your firm undertakes business in (regulated or unregulated).</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="10%"><span style="border:1px solid black;">✔</span> Custody</td>
                        <td width="20%" align="center"><span style="border:1px solid black;">✗</span> Debt instruments</td>
                        <td width="10%"><span style="border:1px solid black;">✔</span> Equities</td>
                        <td width="25%" align="center"><span style="border:1px solid black;">✗</span> Complex instruments</td>
                        <td width="25%"><span style="border:1px solid black;">✗</span> Repurchase transactions</td>
                        <td width="10%"><span style="border:1px solid black;">✗</span> Buy-sell</td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;"></td>
                    </tr>
                    <tr>
                        <td>
                            <span style="border:1px solid black;">✗</span> Other
                        </td>
                        <td style="padding: 5px;border:1px solid black;" colspan="5"></td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">3. Please list the countries in which your firm undertakes business, the domicile of its UBO and any subsidiaries of the firm.</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">Please list the countries in which your firm undertakes business, the domicile of its UBO and any subsidiaries of the firm</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">4. The ownership structure of this particular entity – through to the ultimate beneficial owner(s) (natural persons) (a diagram of the
            whole legal structure would help).</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">The ownership structure of this particular entity – through to the ultimate beneficial owner(s) (natural persons) (a diagram of the whole legal structure would help).</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">5. Does the company have AML procedures. <br> If Yes, please provide us with a copy of the AML policy and complete the enclosed “AML Questionnaire”.</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="7%"><span style="border:1px solid black;">✗</span> No</td>
                        <td><span style="border:1px solid black;">✔</span> Yes</td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">6. Are any funds transfers with affiliated or related parties expected to be carried out using this account?</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="7%"><span style="border:1px solid black;">✗</span> No</td>
                        <td width="32%"><span style="border:1px solid black;">✔</span> Yes, please indicate turnover:</td>
                        <td style="padding: 5px;border:1px solid black;">Are any funds transfers with affiliated or related parties expected to be carried out using this account? *</td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">7. Do other parties affiliated or related to you have an account open with Illiquidx Limited? If “Yes” please provide details below.</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="7%"><span style="border:1px solid black;">✗</span> No</td>
                        <td width="8%"><span style="border:1px solid black;">✔</span> Yes</td>
                        <td style="font-size:12px;">Explanatory Note: This information is collected to enable us to calculate exposures on a single risk basis taking into account situations where your financial distress
                        could lead to the financial distress of the persons affiliated or related to you and vice versa.</td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" style="border-spacing: 10px;" width="100%">
                    <tbody><tr>
                        <td width="33%">Account number</td>
                        <td width="33%">Account holder</td>
                        <td width="33%">Relationship</td>
                    </tr><tr>
                                <td style="border:1px solid black;padding:5px;">11</td>
                                <td style="border:1px solid black;padding:5px;">22</td>
                                <td style="border:1px solid black;padding:5px;">33</td>
                            </tr><tr>
                                <td style="border:1px solid black;padding:5px;">44</td>
                                <td style="border:1px solid black;padding:5px;">55</td>
                                <td style="border:1px solid black;padding:5px;">66</td>
                            </tr><tr>
                                <td style="border:1px solid black;padding:5px;">77</td>
                                <td style="border:1px solid black;padding:5px;">88</td>
                                <td style="border:1px solid black;padding:5px;">99</td>
                            </tr></tbody></table>
             </td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">8. Anticipated monthly and annual trading turnover, USD</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">8. Anticipated monthly and annual trading turnover, USD.</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;">9. Anticipated total account balance, (total securities and funds held), USD</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">9. Anticipated total account balance, (total securities and funds held), USD.</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-top:15px;padding-bottom:5px;">10. Size of wealth (total market value of all physical and intangible assets owned, USD)</td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;font-size:12px;">Please refer to your Financial Statements</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">10. Size of wealth (total market value of all physical and intangible assets owned, USD) Please refer to your Financial Statements.</td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-bottom:15px;padding-top:15px;line-height:130%;">11.Please provide information if the UBO(s) of over 25% of share capital has (have) a second citizenship. If "yes", please specify the country and reason for the second citizenship, and choose the applicable option:</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="7%"><span style="border:1px solid black;">✔</span> No</td>
                        <td width="25%"><span style="border:1px solid black;">✗</span> Yes, country of the second citizenship</td>
                        <td style="padding: 10px;border:1px solid black;"></td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td><span style="border:1px solid black;">✗</span> Naturalization</td>
                        <td style="padding:5px 20px;"><span style="border:1px solid black;">✗</span> Investment program or similar</td>
                    </tr>
                </tbody></table>
             </td>
        </tr>
        <tr>
            <td style="border-bottom:1px solid black;padding-top:5px;padding-bottom:15px;"></td>
        </tr>
        <tr>
            <td style="padding-top:15px;padding-bottom:15px;">12. Please provide information on the source of funds and supporting documentation:</td>
        </tr>
        <tr>
            <td style="padding:5px;border:1px solid black;height:50px">12. Please provide information on the source of funds and supporting documentation</td>
        </tr>
    </tbody></table>
    <table width="100%" border="1" style="margin: 50px 20px 20px; padding: 60px 5px; border: 1px solid black; border-collapse: collapse;">
        <tbody>
            <tr>
                <td style="text-align: center; vertical-align: middle; padding: 20px;">
                    <table width="100%" style="font-size: 18px; padding: 15px; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="text-align: left; width: 10%;">Name:</td>
                                <td style="text-align: left; border-bottom: 1px solid black; width: 35%;">divyesh chothani</td>
                                <td style="text-align: right; width: 10%;">Signed:</td>
                                <td style="width: 45%; text-align: left;">
                                    <div><img src="data:image/png;base64,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" alt="signature.png" style="width: 250px;"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" style="font-size: 18px; padding: 15px; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="text-align: left; width: 10%;">Position:</td>
                                <td style="text-align: left; border-bottom: 1px solid black; width: 90%;">Software developer</td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" style="font-size: 18px; padding: 15px; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="text-align: left; width: 30%;">Duly authorized for and on behalf of:</td>
                                <td style="text-align: left; border-bottom: 1px solid black; width: 35%;">test 123456789</td>
                                <td style="text-align: right; width: 10%;">Date:</td>
                                <td style="text-align: left; border-bottom: 1px solid black; width: 25%;">21/05/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>


    <pagebreak>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 10px;padding-top:30px;">
        <tbody><tr>
            <td style="font-size:18px;font-weight:600;"><b>Sanctions Exposure Questionnaire: Part 1</b></td>
        </tr>
    </tbody></table>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
        <tbody><tr>
            <td style="font-weight:bold;color:#000;">1. Does the company have any sanctioned party as a client?</td>
            <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><span style="border:1px solid black;">✗</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✔</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">‘Sanctioned party’ means any individual or entity specified in the following lists:</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 0px 17px;line-height:140%;"> EU restrictive measures: <a href="#">https://data.europa.eu/euodp/data/dataset/consolidated-list-of-persons-groups-and-entities-subject-to-eufinancial-sanctions/resource/3a1d5dd6-244e-4118-82d3-db3be0554112</a></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;">OFAC&apos;s Sanctions List: <a href="#"> https://www.treasury.gov/resource-center/sanctions/SDN-List/Pages/default.aspx</a></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;"> US Sectoral Sanctions Identifications (SSI) List:  <a href="#"> https://ofac.treasury.gov/consolidated-sanctions-list-non-sdn-lists/sectoral-sanctionsidentifications-ssi-list
                UK HM Treasury Sanct</a></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;"> United Nations Security Council Sanctions List:  <a href="#"> https://www.un.org/sc/suborg/en/sanctions/un-sc-consolidated-list</a></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 0px 17px;line-height:140%;"> OFSI  <a href="#">  https://www.gov.uk/government/publications/financial-sanctions-ukraine-sovereignty-and-territorial-integrity</a></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:14px;font-weight:500;color:#000;padding:10px 10px 15px 17px;"> If &apos;Yes&apos;, please specify details of the sanctioned party and explain cooperation.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">aaaaaaaa</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 23px;border-bottom:1px solid black;"></td>
        </tr>
    </tbody></table>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
        <tbody><tr>
            <td style="font-size:15px;font-weight:bold;color:#000;line-height:140%;">2. Does the company have any sanctioned party as a business partner, counterparty, or affiliated company? &nbsp;&nbsp;&nbsp;</td>
            <td style="font-size:15px;font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">If &apos;Yes&apos;, please specify details of the sanctioned party and explain cooperation.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">bbbbbbbbbb</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 23px;border-bottom:1px solid black;"></td>
        </tr>
    </tbody></table>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
        <tbody><tr>
            <td style="font-weight:bold;color:#000;">3. Does the company has any sanctioned party in the ownership structure?</td>
            <td style="font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">If If &apos;Yes&apos;, please specify the details of the sanctioned party and the % of ownership.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">ccccccccccccc</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 23px;border-bottom:1px solid black;"></td>
        </tr>
    </tbody></table>
    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
        <tbody><tr>
            <td style="font-weight:bold;color:#000;line-height:140%;">4. Does the Company have, or plan to have a presence or business interest in any of the following countries: &nbsp;&nbsp;&nbsp; </td>
            <td style="font-weight:bold;color:#000;text-align:right;padding-top: 5px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:bold;color:#000;">Iran, Sudan, North Korea, Syria, Cuba, OFAC Comprehensively Sanctioned Country/Region, or with Sanctioned Parties*?</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:5px 10px 10px 17px">If &apos;Yes&apos;, please specify the details of the sanctioned party and the % of ownership.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">dddddddddddddd</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 20px;font-size:13px;">If &apos;Yes&apos;,  please explain and include the following:</td>
        </tr>
        <tr>
            <td colspan="2">
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size:13px;">
                    <tbody><tr>
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
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 20px;font-weight:bold;">If the response to Q4 is &apos;Yes&apos;, complete the table below.</td>
        </tr> 
        <tr>
            <td colspan="2">  
                <table cellpadding="0" cellspacing="0" style="border: 1px solid black; border-spacing: 10px; width: 100%;border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid black;padding: 5px;">Legal Name of subsidiary/affiliate Involved</th>
                            <th style="border: 1px solid black;padding: 5px;">Country/Region</th>
                            <th style="border: 1px solid black;padding: 5px;">OFAC license, general license, or other government authorization/exemption</th>
                            <th style="border: 1px solid black;padding: 5px;">OFAC License number General License Number (i.e. General License Sb, etc.) Government Authorization/Exemption Number(i.e. 31CFR 515.533)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3" style="border: 1px solid black;padding: 5px;">LEGAL NAME OF SUBSIDIARY/AFFILIATE INVOLVED</td>
                            <td style="border: 1px solid black;padding: 5px;">LEGAL NAME OF SUBSIDIARY/AFFILIATE INVOLVED1</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE, GENERAL LICENSE, OR OTHER GOVERNMENT AUTHORIZATION/EXEMPTION1</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE NUMBER GENERAL LICENSE NUMBER (I.E. GENERAL LICENSE SB, ETC.) GOVERNMENT AUTHORIZATION/EXEMPTION NUMBER(I.E. 31CFR 515.533)1</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;padding: 5px;">LEGAL NAME OF SUBSIDIARY/AFFILIATE INVOLVE2</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE, GENERAL LICENSE, OR OTHER GOVERNMENT AUTHORIZATION/EXEMPTION2</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE NUMBER GENERAL LICENSE NUMBER (I.E. GENERAL LICENSE SB, ETC.) GOVERNMENT AUTHORIZATION/EXEMPTION NUMBER(I.E. 31CFR 515.533)2</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;padding: 5px;">LEGAL NAME OF SUBSIDIARY/AFFILIATE INVOLVE3</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE, GENERAL LICENSE, OR OTHER GOVERNMENT AUTHORIZATION/EXEMPTION3</td>
                            <td style="border: 1px solid black;padding: 5px;">OFAC LICENSE NUMBER GENERAL LICENSE NUMBER (I.E. GENERAL LICENSE SB, ETC.) GOVERNMENT AUTHORIZATION/EXEMPTION NUMBER(I.E. 31CFR 515.533)3</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
      </tbody></table>
      <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">      
        <tbody><tr>
            <td colspan="2" style="padding-top: 23px; border-bottom:1px solid black;"></td>
        </tr>
        <tr>
            <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">5. Does the Company have, or plan to have, a presence or business interest in Crimea/Sevastopol Regions?</td>
            <td style="font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please provide the details.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">EEEEEEEEEEEEE</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
        </tr>
        <tr>
            <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">6. Do you screen your clients, business parties, counterparties against sanction lists on onboarding and during the customer
            life cycle?</td>
            <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please provide the details.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">FFFFFFFFFFFF</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
        </tr>
        <tr>
            <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">7. Do you screen your clients&apos; transactions against sanction lists?</td>
            <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please specify the lists, the providers of your sanction lists and summary of the controls.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">GGGGGGGGGGGGGG</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
        </tr>
        <tr>
            <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">8. Will any transactions executed with us end up benefiting a sanctioned party?</td>
            <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px;border:1px solid black;height:50px">HHHHHHHHHHHHH</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
        </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">9. Have a director, senior officer, or 10% or greater owner or shareholder who is any of the following:</td>
                <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;padding-top:5px;">- a resident of an OFAC Comprehensively Sanctioned Country/Region;</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- employed or representing a governmental agency, or authority of an OFAC Comprehensively Sanctioned Country/Region,or Venezuela;</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- a person who is a Sanctioned Party?</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
            </tr>
            <tr>
                <td colspan="2" style="padding:5px;border:1px solid black;height:50px">IIIIIIIIIIIIIIII</td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-top: 23px;">10. Have</td>
                <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;padding-top:5px;">- a physical presence in;</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- conducted, or planned to conduct business activity involving Russia/Belarus targeted by Sanctions</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;font-weight:bold;color:#000;line-height:140%;padding-left:25px;">- planned any new investment in Russia/Belarus (including any JV or other minority investment)?</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:13px;font-weight:500;color:#000;padding:0px 10px 10px 17px">If &apos;Yes&apos;, please explain.</td>
            </tr>
            <tr>
                <td colspan="2" style="padding:5px;border:1px solid black;height:50px">JJJJJJJJJJJJJJJJJJJJJJ</td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 26px;border-bottom:1px solid black;"></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;color:#000;line-height:140%;padding-top:30px;">If the response to either Q4 or Q9 is &apos;Yes&apos;, the supplemental questions below are required to be completed.</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:14px;color:#000;line-height:140%;">If the response to Q10 is &apos;Yes&apos;, the Sanction Customer Questionnaire - Russia/Belarus Annex below is required to be completed.</td>
            </tr>
        </tbody></table>
        <pagebreak>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td align="center" style="font-size:18px;color:#000;line-height:140%;padding-top: 23px;"><b>Supplemental Questions (only required if either Q4 or Q9 have &apos;Yes&apos; as a response)</b></td>
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
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 20px 20px;padding-left:20px;">
            <tbody><tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Crimea/DNR</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">11</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
            <tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Cuba</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">12</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
            <tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Sanctioned Party Revenue</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">13</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
            <tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Iran, Islamic Republic of</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">14</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
            <tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Syrian Arab Republic</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">15</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
            <tr>
                <td width="3%" style="verticle-align:middle;"><span style="border:1px solid black;">✔</span></td>
                <td width="37%" style="font-size:14px;verticle-align:middle;">Korea Democratic People’s Republic of</td>
                <td width="20%" style="border-bottom:1px solid;font-size:14px;verticle-align:middle;">16</td>
                <td width="40%" style="font-size:14px;verticle-align:middle;">%</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;line-height:140%;padding-top: 15px;">If the customer has business dealings in an OFAC Comprehensively Sanctioned Country/Region or with a Sanctioned Party, is this activity
                segregated from their Illiquidx relationship?</td>
            </tr>
            <tr>
                <td style="font-size:14px;font-weight:bold;color:#000;text-align:right;padding-top: 23px;"><span style="border:1px solid black;">✗</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✔</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td width="50%" style="font-size:14px;color:#000;line-height:140%;padding-top: 15px;">
                If &apos;No&apos;, please explain how the activity is not segregated and is being
                facilitated through the Illiquidx relationship, including details of any
                relevant controls, policies, and procedures. If applicable, please
                provide license details and a copy of the license, if under an OFAC
                specific license or governmental license.<br>
                Please note, no activity related to Sanctions should be facilitated via
                the Illiquidx relationship without prior approval directly from Illiquidx,
                even if authorized under a local regulation.
                </td>
                <td width="50%" style="border:1px solid;verticle-align:middle;padding:5px;">TEST123</td>
            </tr>
        </tbody></table>
        <pagebreak>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:50px;">
            <tbody><tr>
                <td align="center" style="font-size:18px;color:#000;line-height:140%;padding-top: 23px;"><b>Sanctions Customer Questionnaire - Russia/Belarus Annex (only required if Q10 has&apos;Yes&apos; as a response)</b></td>
            </tr>
            <tr>
                <td style="font-size:13px;color:#000;line-height:140%;padding-top: 30px;">Please respond Yes/No and provide a detailed explanation at the bottom of this Annex.</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:10px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">A. Please confirm that the customer has conducted an evaluation of all assets and operations to identify any dealings in Russia/Belarus, or with any Russian/Belarusian entities, and otherwise for compliance with sanctions imposed on Russia/Belarus and related entities</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">B. Does the customer do any business with any ministry, agency, state-owned entity, or sovereign fund of the Russian Federation (Central Bank of Russia, the National Wealth Fund, the Ministry of Finance of the Russian Federation, etc.)?</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">C. Does the customer have dealings in Russia/Belarus or with any Russian/Belarusian entities, including, the following sectors:?</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 0px 20px 50px;">
                        <tbody><tr>
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
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
        
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">D. If involved in the oil/petroleum sector or an industry connected to transactions involving oil/petroleum of Russian origin, does the customer have policies, procedures, and controls for complying with the oil price caps determinations issued by the US/EU/UK?</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">E. Does the customer provide any accounting, trust or corporate formation services, or management consulting services in Russia or to
                persons located in Russia? </td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">F. Does the customer rely on any general or specific license(s) related to dealings in Russia or Belarus? If yes, please describe the nature of the general or specific license(s) and the activity for which it must be relied upon</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">G. Has the customer applied for, or does it intend to apply for, any Specific Licenses related to dealings in Russia or Belarus? If yes, please
                describe the nature of the Specific License, the purpose for which it was requested and the status of the application</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody><tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">H. Will any part of the Illiquidx relationship be used directly or indirectly to fund any activities or business of or with any individual or entity,resident/located/ operating/organized/domiciled in Russia/Belarus, or an entity owned such a party, or acting on behalf or at the direction
                of such a party?</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody></table>

        
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
            <tbody>
            <tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:left;">I. Other than as discussed above, has the customer or, to the customer&apos;s knowledge, any of its or any of its subsidiaries&apos; or affiliates&apos; directors, officers, employees, agents or affiliates, taken any action that has resulted or may result in a violation of compliance with
                sanctions imposed on Russia/Belarus and related entities? If yes, provide details.</td>
                <td style="font-size:14px;font-weight:bold;text-align:right;width:10%;verticle-align:top;"><span style="border:1px solid black;">✔</span> Yes &nbsp;&nbsp; <span style="border:1px solid black;">✗</span> No</td>
            </tr>
        </tbody>
        </table>
        
        <pagebreak>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:30p; text-align:center;">
            <tbody>
            <tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:center;">If the response to any of the questions from QA to QI is &apos;Yes&apos;, then please provide details in the textbox below.</td>
                
            </tr>
        </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;">
                <tr>
                    <td width="50%" style="padding-right:20px;">Please provide details of the Russia/Belarus activity, including the total
                    approximate percentage of revenue generated or anticipated in relation to
                    the activity, either directly or indirectly, through the customer or its
                    subsidiaries or affiliates. Provide your strategy, both current and future (if
                    different), for the related activity, as well as any additional control
                    framework implemented to ensure compliance with relevant sanctions.</td>
                    <td width="50%" style="border:1px solid;verticle-align:middle;padding:5px;"></td>
                </tr>
        </table>
        <pagebreak>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;padding-top:30p; text-align:center;">
            <tbody>
            <tr>
                <td style="font-size:14px;color:#000;verticle-align:top;text-align:center;">Sanctions Customer Questionnaire - Guide to completion, notes, and terms</td>
                
            </tr>
        </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top; padding-top:10px;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">1.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">Targeted Sanctions - there have been various targeted sanctions implemented by such authorities as OFAC, EU, OFSI, etc. Some of these sanctions target certain sectors
                    of a country&apos;s economy, including: financial services, energy, mining, and defense and related material sectors. These are commonly called &apos;SSI&apos; (Sectoral Sanction
                    Identifications) sanctions. There have also been many other restrictions implemented, such as; new investment in Russia, certain corporate formation or accounting services,
                    various import or export prohibitions, financing to Russian parties, as well as the facilitation of these activities. These examples are not exhaustive and are intended to give
                    context only.
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 0px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">2.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:5px;">What customer exposure related to Russia, Venezuela, or Belarus should be included?</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px;verticle-align:top;padding-top:10px;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:28px;">We DO expect the Questionnaire to reflect if customers:</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 10px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10px;">(1)</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-bottom:10px;">conduct business with a Sanctioned Party (e.g., SSI or SON) in Russia, Venezuela or Belarus;</td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10px;">(2)</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-bottom:10px;">have an owner, director, officer, etc. that is a Russian, Venezuelan or a Belarussian Sanctioned Party;
                    </td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10px;">(3)</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-bottom:10px;">rely on any general or specific licenses related to Russia, Venezuela or Belarus.</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">3.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">An affiliate is an entity that directly, or indirectly through one or more intermediaries, controls or is controlled by, or is under common control with, the customer (e.g., an affiliate
                    can be a parent or sister company).</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">4.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:5px;">Including offices, branches, operations, joint ventures, assets, contracts or investments</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">5.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">Including but not limited to: buying, selling or otherwise dealing in or financing products, merchandise, commodities or services.</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">6. &nbsp; Sanctioned Party is:</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10p;">(a) &nbsp;&nbsp; any individual or entity listed in any sanctions-related list of designated Persons maintained by OFAC, the U.S. Department of State, the United Nations Security
                    Council, the European Union, any European Union member state, Her Majesty&apos;s Treasury of the United Kingdom or other relevant sanctions authority (e.g., OFAC Specially
                    Designated National (SDN), or OFAC Sectoral Sanctions Identifications (SSI) List);
                    </td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10p;">(b) &nbsp;&nbsp; any individual or entity operating, organized or resident in a Sanctioned Country/Region (e.g., an entity physically located in Iran or the Crimea region);</td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;padding-bottom:10p;">(c) &nbsp;&nbsp; any entity owned or controlled by any one or more individuals or entities described in (a) or (b), (e.g., a 50% or more owned subsidiary of an OFAC SDN/SSI); OR</td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:40px;">(d) &nbsp;&nbsp; any individual or entity that is otherwise the target of any sanctions (e.g., the Government of Venezuela or any entity owned or controlled by it, including its agencies
                    and instrumentalities).</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">7. &nbsp; &apos;Control&apos; of the customer by a sanctioned party is meant to include one or more of the following factors:</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 15px;verticle-align:top;padding-left:10px;">
            <tbody>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;">&#9679;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">The sanctioned party has the right (directly or indirectly) to appoint or remove a majority of the board of directors, or members of the administrative, management or supervisory
                    body of the customer;</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 15px;verticle-align:top;padding-left:10px;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">Or</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;padding-left:10px;">
            <tbody>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;">&#9679;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">It is reasonable to expect that the sanctioned party either directly or indirectly is or would be able to ensure the affairs of the customer are conducted in accordance with the
                    sanctioned party&apos;s wishes.</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">This could, for example, include:</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;padding-left:40px;">
            <tbody>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Appointing, solely by exercising one&apos;s voting rights, a majority of the members of the administrative, management or supervisory bodies of the customer, who have
                    held office during the present and previous financial year;</td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Controlling alone, pursuant to an agreement with other shareholders in or members of the customer, a majority of shareholders&apos; or members&apos; voting rights in the
                    customer;
                    </td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Having the right to exercise a dominant influence over the customer, pursuant to an agreement entered into with the customer, or to a provision in its Memorandum or
                    Articles of Association, where the law governing that the customer permits its being subject to such agreement or provision;</td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Having the right to exercise a dominant influence referred to in the point above, without being the holder of that right (including by means of a front company);</td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-top:20px; padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-top:20px;padding-left:10px;padding-bottom:10px;">Having the right to use all or part of the assets of the customer;
                    </td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Managing the business of the customer on a unified basis, while publishing consolidated accounts;
                    </td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Sharing jointly and severally the financial liabilities of the customer, or guaranteeing them;
                    </td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Having influence as regards corporate strategy, operational policy, business plans, investment, capacity, provision of finance, human resources and legal matters;</td>
                </tr>
                <tr>
                    <td style="font-size:9px;color:#000;vertical-align: top;padding-bottom:10px;">&#9675;</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;padding-bottom:10px;">Putting in place or maintaining mechanisms to monitor the commercial conduct of the customer;
                    </td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">8.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">Russian State Owned, Defense/Military, Energy, Transport, Luxury Goods, Metals & Mining, Accounting, Trust or Corporate Formation Services, Management Consulting,
                    Fish, Alcohol, Gold, and Non-Industrial Diamonds. As well as any sector involving goods controlled by EU, UK, and US Trade Sanctions targeting Russia and Belarus.</td>
                </tr>
            </tbody>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0px 20px 20px;verticle-align:top;">
            <tbody>
                <tr>
                    <td style="font-size:13px;color:#000;vertical-align: top;">9.</td>
                    <td style="font-size:13px;color:#000;vertical-align: top;padding-left:10px;">For example, in the last 5 years, has the customer filed a voluntary self-disclosure with OFAC or made an equivalent sanctions-related notification to a relevant authority,
                    become the subject of an administrative subpoena or of a sanctions-related enforcement action, or have any open or ongoing internal or external sanctions-related
                    investigation?</td>
                </tr>
            </tbody>
        </table>
        
</pagebreak></pagebreak></pagebreak></body></html>');
$mpdf->Output();
