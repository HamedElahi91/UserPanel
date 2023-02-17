<div class="col-md-12">
      <div class="card">
            <div class="card-body">
                  <h5 class="card-title"> نتیجه پرداخت</h5>
                        <?php if($status): ?>
                              <div class="alert alert-success">
                                    <p>پرداخت موفق</p>
                                    <p>
                                          <span> کد پیگیری:</span>
                                          <span><?php echo $result; ?></span>
                                    </p>
                              </div>
                        <?php endif; ?>

                        <?php if(false == $status): ?>
                              <div class="alert alert-danger">
                                    <p>پرداخت ناموفق</p>
                              </div>
                        <?php endif; ?>
            </div>
      </div>
</div>