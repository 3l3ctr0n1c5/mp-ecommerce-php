<?php if( isset($_GET["payment_id"]) ) { ?>
    <p style="background: #8ebacd; text-align: center;padding: .3em;">
        <b>payment_status:</b> <?php echo $_GET["payment_status"] ?> <br>
        <b>payment_status_detail:</b> <?php echo $_GET["payment_status_detail"] ?> <br>
        <br>
        <b>mp_status:</b> <?php echo $_GET["mp_status"] ?> <br>
        <b>payment_id:</b> <?php echo $_GET["payment_id"] ?> <br>
        <b>collection_id:</b> <?php echo $_GET["collection_id"] ?> <br>
        <b>collection_status:</b> <?php echo $_GET["collection_status"] ?> <br>
        <b>external_reference:</b> <?php echo $_GET["external_reference"] ?> <br>
        <b>payment_type:</b> <?php echo $_GET["payment_type"] ?> <br>
        <b>merchant_order_id:</b> <?php echo $_GET["merchant_order_id"] ?> <br>
        <b>preference_id:</b> <?php echo $_GET["preference_id"] ?> <br>
    </p>
<?php } ?>
