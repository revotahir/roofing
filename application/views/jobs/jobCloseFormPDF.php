
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job Close Form PDF</title>
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
    <h1>Job Close Form</h1>
    <div class="section">
        <table>
            <tr><td class="label">Customer Name</td><td><?= $jobCloseFormData[0]['cCustName'] ?? '' ?></td></tr>
            <tr><td class="label">Approval Presented By</td><td><?= $jobCloseFormData[0]['cAppPres'] ?? '' ?></td></tr>
            <tr><td class="label">Completion Date</td><td><?= $jobCloseFormData[0]['cCompDate'] ?? '' ?></td></tr>
            <tr><td class="label">Address</td><td><?= $jobCloseFormData[0]['cAddrs'] ?? '' ?></td></tr>
            <tr><td class="label">City</td><td><?= $jobCloseFormData[0]['cCity'] ?? '' ?></td></tr>
            <tr><td class="label">State</td><td><?= $jobCloseFormData[0]['cState'] ?? '' ?></td></tr>
            <tr><td class="label">Zip</td><td><?= $jobCloseFormData[0]['cZip'] ?? '' ?></td></tr>
            <tr><td class="label">Home Phone</td><td><?= $jobCloseFormData[0]['cPhone'] ?? '' ?></td></tr>
            <tr><td class="label">Cell Phone</td><td><?= $jobCloseFormData[0]['cCell'] ?? '' ?></td></tr>
            <tr><td class="label">Email</td><td><?= $jobCloseFormData[0]['cEmail'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Customer Approval</h2>
    <div class="section">
        <table>
            <tr>
                <td class="label">Customer Signature</td>
                <td>
                    <?php if (!empty($jobCloseFormData[0]['signature_55'])): ?>
                        <img src="<?= $jobCloseFormData[0]['signature_55'] ?>" alt="Customer Signature" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Date</td><td><?= $jobCloseFormData[0]['cDate55'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Insurance Company</h2>
    <div class="section">
        <table>
            <tr>
                <td class="label">Insurance Company Signature</td>
                <td>
                    <?php if (!empty($jobCloseFormData[0]['signature_56'])): ?>
                        <img src="<?= $jobCloseFormData[0]['signature_56'] ?>" alt="Insurance Signature" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Claim #</td><td><?= $jobCloseFormData[0]['cClaim'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Warranty</h2>
    <div class="section">
        <table>
            <tr>
                <td class="label">Customer Signature (Warranty)</td>
                <td>
                    <?php if (!empty($jobCloseFormData[0]['signature_warn'])): ?>
                        <img src="<?= $jobCloseFormData[0]['signature_warn'] ?>" alt="Warranty Signature" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Date</td><td><?= $jobCloseFormData[0]['cDatewarn'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Release of Lien / Payment Calculation</h2>
    <div class="section">
        <table>
            <tr><td class="label">Original Contract Total</td><td><?= $jobCloseFormData[0]['ContTotal'] ?? '' ?></td></tr>
            <tr><td class="label">Change Order(s) Total</td><td><?= $jobCloseFormData[0]['ChangeOrderTotal'] ?? '' ?></td></tr>
            <tr><td class="label">Project Total</td><td><?= $jobCloseFormData[0]['ProjTotal'] ?? '' ?></td></tr>
            <tr><td class="label">Payment #1 - Down Payment</td><td><?= $jobCloseFormData[0]['PaymentDown'] ?? '' ?></td></tr>
            <tr><td class="label">Payment #2</td><td><?= $jobCloseFormData[0]['PaymentDown2'] ?? '' ?></td></tr>
            <tr><td class="label">Final Payment Amount Due</td><td><?= $jobCloseFormData[0]['FinalPay'] ?? '' ?></td></tr>
            <tr><td class="label">Check Number</td><td><?= $jobCloseFormData[0]['CheckNumber'] ?? '' ?></td></tr>
        </table>
    </div>

    <h2>Final Signature</h2>
    <div class="section">
        <table>
            <tr>
                <td class="label">Customer Signature (Final)</td>
                <td>
                    <?php if (!empty($jobCloseFormData[0]['signature_end'])): ?>
                        <img src="<?= $jobCloseFormData[0]['signature_end'] ?>" alt="Final Signature" class="signature-img" width="200">
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td class="label">Date</td><td><?= $jobCloseFormData[0]['cDateend'] ?? '' ?></td></tr>
        </table>
    </div>

    <div class="section">
        <span style="font-size:11px;color:#888;">Generated on <?= date('Y-m-d H:i') ?></span>
    </div>
</body>
</html>