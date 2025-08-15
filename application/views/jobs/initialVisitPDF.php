
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Initial Visit Form PDF</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; color: #222; }
        h1 { font-size: 22px; margin-bottom: 10px; }
        h2 { font-size: 16px; margin-top: 30px; margin-bottom: 10px; border-bottom: 1px solid #ccc; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { padding: 6px 8px; border: 1px solid #eee; vertical-align: top; }
        .section { margin-bottom: 25px; }
        .label { font-weight: bold; width: 220px; }
        .signature-img { border: 1px solid #ccc; border-radius: 4px; margin-top: 5px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Initial Visit Form</h1>
    <div class="section">
        <table>
            <tr><td class="label">Client Name</td><td><?= $initialVisitData[0]['cName'] ?? '' ?></td></tr>
            <tr><td class="label">Manager Name</td><td><?= $initialVisitData[0]['cRName'] ?? '' ?></td></tr>
            <tr><td class="label">Date</td><td><?= $initialVisitData[0]['cDate'] ?? '' ?></td></tr>
            <tr><td class="label">Address</td><td><?= $initialVisitData[0]['cAddrs'] ?? '' ?></td></tr>
            <tr><td class="label">City</td><td><?= $initialVisitData[0]['cCity'] ?? '' ?></td></tr>
            <tr><td class="label">State</td><td><?= $initialVisitData[0]['cState'] ?? '' ?></td></tr>
            <tr><td class="label">Zip</td><td><?= $initialVisitData[0]['cZip'] ?? '' ?></td></tr>
            <tr><td class="label">Home Phone</td><td><?= $initialVisitData[0]['cPhone'] ?? '' ?></td></tr>
            <tr><td class="label">Cell Phone</td><td><?= $initialVisitData[0]['cCell'] ?? '' ?></td></tr>
            <tr><td class="label">Email</td><td><?= $initialVisitData[0]['cEmail'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Roofing Details</h2>
    <div class="section">
        <table>
            <tr><td class="label">House Sq</td><td><?= $initialVisitData[0]['cHouseSq'] ?? '' ?></td></tr>
            <tr><td class="label">Attached Garage Sq</td><td><?= $initialVisitData[0]['cAttSq'] ?? '' ?></td></tr>
            <tr><td class="label">Detached Garage Sq</td><td><?= $initialVisitData[0]['cDetSq'] ?? '' ?></td></tr>
            <tr><td class="label">Chimney Sq</td><td><?= $initialVisitData[0]['cChiSq'] ?? '' ?></td></tr>
            <tr><td class="label">Other Vent</td><td><?= $initialVisitData[0]['cOthVen'] ?? '' ?></td></tr>
            <tr><td class="label">Flat Roof</td><td><?= ($initialVisitData[0]['cFlaYes']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">House Type</td><td><?= ($initialVisitData[0]['cSingSto']==1) ?"Single Story": 'Two Story' ?></td></tr>
            <tr><td class="label">Primary Pitch</td><td><?php 
            if($initialVisitData[0]['cPitch']==1){
                echo "4/12 or less";
            } elseif($initialVisitData[0]['cPitch']==2){
                echo "6/12 to 8/12";
            } elseif($initialVisitData[0]['cPitch']==3){
                echo "8/12 or greater";
            } else {
                echo "Not Specified";
            }
            ?></td></tr>
            <tr><td class="label">Ridge Vent</td><td><?= ($initialVisitData[0]['cRidVen']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Soffit Vent</td><td><?= ($initialVisitData[0]['cSoffVen']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Louver/Can</td><td><?= ($initialVisitData[0]['cLouVen'] ==1)?"Yes": 'No' ?></td></tr>
            <tr><td class="label">No Ventilation</td><td><?= ($initialVisitData[0]['cNoVen']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Turbine</td><td><?= ($initialVisitData[0]['cTurVen']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Other Existing Ventilation</td><td><?= $initialVisitData[0]['cOthVen2'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Ventilation & Gutters</h2>
    <div class="section">
        <table>
            <tr><td class="label">Replace Ridge Vent</td><td><?= ($initialVisitData[0]['cRepc']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Cut In New Ridge Vent Length</td><td><?= $initialVisitData[0]['cRidg'] ?? '' ?></td></tr>
            <tr><td class="label">Soffit Vent</td><td><?= ($initialVisitData[0]['cSof'] ==1)?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Replace Can(s) Qty</td><td><?= ($initialVisitData[0]['cReplc']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">House Does Not Have Gutters</td><td><?= ($initialVisitData[0]['cGut']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Keep Existing Gutters</td><td><?= ($initialVisitData[0]['cKeep']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Install New Seamless Gutters Length</td><td><?= $initialVisitData[0]['cLF'] ?? '' ?></td></tr>
            <tr><td class="label">Gutter Type</td><td><?= $initialVisitData[0]['cGutt'] ?? '' ?></td></tr>
            <tr><td class="label">Gutter Color</td><td><?= $initialVisitData[0]['cColor'] ?? '' ?></td></tr>
            <tr><td class="label">1-Story Down Spout Qty</td><td><?= $initialVisitData[0]['cDown'] ?? '' ?></td></tr>
            <tr><td class="label">2-Story Down Spout Qty</td><td><?= $initialVisitData[0]['cDown2'] ?? '' ?></td></tr>
            <tr><td class="label">Inside Corner Qty</td><td><?= $initialVisitData[0]['cInsCor'] ?? '' ?></td></tr>
            <tr><td class="label">Outside Corner Qty</td><td><?= $initialVisitData[0]['cOutCor'] ?? '' ?></td></tr>
            <tr><td class="label">Splash Guard Qty</td><td><?= $initialVisitData[0]['cSplCor'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Gutter Guard & Accessories</h2>
    <div class="section">
        <table>
            <tr><td class="label">No Gutter Protection Present</td><td><?= ($initialVisitData[0]['cGutGur']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Homeowner Remove/Re-install</td><td><?= ($initialVisitData[0]['cGutHome']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Contractor Remove & Haul Away</td><td><?= ($initialVisitData[0]['cGutRem']) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Needs New Gutter Protection</td><td><?= ($initialVisitData[0]['cGutNeed']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Drip Edge Color</td><td><?= $initialVisitData[0]['cDrip'] ?? '' ?></td></tr>
            <tr><td class="label">Can Vents Color</td><td><?= $initialVisitData[0]['cCanVent'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Fascia/Soffit & Tearoff</h2>
    <div class="section">
        <table>
            <tr><td class="label">Keep Existing Fascia/Soffit</td><td><?= ($initialVisitData[0]['cKeepEx']==1) ?"Yes": 'No' ?></td></tr>
            <tr><td class="label">Replace LF of Fascia</td><td><?= $initialVisitData[0]['cRplcL'] ?? '' ?></td></tr>
            <tr><td class="label">Replace LF of Soffit</td><td><?= $initialVisitData[0]['cRplcS'] ?? '' ?></td></tr>
            <tr><td class="label">Tearoff Layers</td><td><?= ($initialVisitData[0]['c1Layer']==1) ?'1 Layer': '2 Layer' ?></td></tr>
            <tr><td class="label">Layers Price per Layer</td><td><?= "$ ".$initialVisitData[0]['cLyrPre'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Wood Replacement, Permits & Notes</h2>
    <div class="section">
        <table>
            <tr><td class="label">Wood Replacement Initials</td><td><?= $initialVisitData[0]['cInit'] ?? '' ?></td></tr>
            <tr><td class="label">Permits Initials</td><td><?= $initialVisitData[0]['cPer'] ?? '' ?></td></tr>
            <tr><td class="label">Notes</td><td><?= $initialVisitData[0]['cNotes'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Payment Details</h2>
    <div class="section">
        <table>
            <tr><td class="label">Payment Method</td><td><?php 
            if($initialVisitData[0]['paymentMethod']){
                if($initialVisitData[0]['paymentMethod'] == 1){
                    echo "Cash";
                } elseif($initialVisitData[0]['paymentMethod'] == 2){
                    echo "Check";
                } elseif($initialVisitData[0]['paymentMethod'] == 3){
                    echo "Credit Card";
                } else {
                    echo "Not Specified";
                }
            } else {
                echo "Not Specified";
            }
            ?></td></tr>
            <tr><td class="label">Check #</td><td><?= $initialVisitData[0]['cCheck'] ?? '' ?></td></tr>
            <tr><td class="label">Check Received</td><td><?= $initialVisitData[0]['cCheckRecei'] ?? '' ?></td></tr>
            <tr><td class="label">Credit Card Name</td><td><?= $initialVisitData[0]['cCreditName'] ?? '' ?></td></tr>
            <tr><td class="label">Credit Card #</td><td><?= $initialVisitData[0]['cCard'] ?? '' ?></td></tr>
            <tr><td class="label">Exp. Date</td><td><?= $initialVisitData[0]['cDateCredit'] ?? '' ?></td></tr>
            <tr><td class="label">CVC</td><td><?= $initialVisitData[0]['cCVC'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Installation Details</h2>
    <div class="section">
        <table>
            <tr><td class="label">Estimated Install</td><td><?= $initialVisitData[0]['cEsti'] ?? '' ?></td></tr>
            <tr><td class="label">Contractor Contact Name</td><td><?= $initialVisitData[0]['cCont'] ?? '' ?></td></tr>
            <tr><td class="label">Contact Phone #</td><td><?= $initialVisitData[0]['cContPhone'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Notice to Customer & Signatures</h2>
    <div class="section">
        <table>
            <tr><td class="label">Notice Initials</td><td><?= $initialVisitData[0]['cNotic'] ?? '' ?></td></tr>
            <tr>
                <td class="label">Customer Signature 1</td>
                <td>
                    <?php if (!empty($initialVisitData[0]['signature_1'])): ?>
                        <img src="<?= $initialVisitData[0]['signature_1'] ?>" alt="Signature 1" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td class="label">Customer Signature 2</td>
                <td>
                    <?php if (!empty($initialVisitData[0]['signature_2'])): ?>
                        <img src="<?= $initialVisitData[0]['signature_2'] ?>" alt="Signature 2" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Signature 2 Date</td><td><?= $initialVisitData[0]['cDate1'] ?? '' ?></td></tr>
            <tr>
                <td class="label">Customer Signature 3</td>
                <td>
                    <?php if (!empty($initialVisitData[0]['signature_3'])): ?>
                        <img src="<?= $initialVisitData[0]['signature_3'] ?>" alt="Signature 3" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Signature 3 Date</td><td><?= $initialVisitData[0]['cDate2'] ?? '' ?></td></tr>
            <tr>
                <td class="label">Agent Signature</td>
                <td>
                    <?php if (!empty($initialVisitData[0]['signature_agent'])): ?>
                        <img src="<?= $initialVisitData[0]['signature_agent'] ?>" alt="Agent Signature" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Agent Signature Date</td><td><?= $initialVisitData[0]['aDate'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Project Financials</h2>
    <div class="section">
        <table>
            <tr><td class="label">Project Total</td><td><?= "$ ".$initialVisitData[0]['pTotal'] ?? '' ?></td></tr>
            <tr><td class="label">Down Payment</td><td><?= "$ ".$initialVisitData[0]['cDownPay'] ?? '' ?></td></tr>
            <tr><td class="label">Deposit Required (unless Pre-Approved)</td><td><?= $initialVisitData[0]['cPreApp'].'%' ?? '' ?></td></tr>
            <tr><td class="label">Balance Due</td><td><?= "$ ".$initialVisitData[0]['cBal'] ?? '' ?></td></tr>
        </table>
    </div>

    <div class="section">
        <span style="font-size:11px;color:#888;">Generated on <?= date('Y-m-d H:i') ?></span>
    </div>
</body>
</html>