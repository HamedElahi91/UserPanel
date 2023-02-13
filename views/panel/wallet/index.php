<div class="col-md-12">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">کیف پول</h5>
        <div class="alert alert-info">
            <p>
                <span>موجودی کیف شما:</span>
                <span><?php echo $user_wallet; ?></span>
            </p>
            
        </div>
        <div class="payment-form">
            <form class="form-inline" action="?action=payForWallet" method="POST">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="amount" class="sr-only">مبلغ مورد نظر: </label>
                    <input type="number" class="form-control" id="amount" name="amount">
                </div>    
                <input type="submit" class="btn btn-primary mb-2" value="پرداخت">
            </form>
        </div>
    </div>
</div>

</div>