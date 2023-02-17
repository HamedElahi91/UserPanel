<div class="col-md-12">

      <div class="card">
            <h4 class="card-title">تراکنش های شما </h4>
            <div class="card-body">
                  <div class="table-responsive">
                        <table class="table table-bordred table-hove">
                              <thead>
                                    <tr>
                                          <th>شماره تراکنش</th>
                                          <th>شماره پیگیری</th>
                                          <th>تاریخ ایجاد</th>
                                          <th>تاریخ پرداخت</th>
                                          <th>وضعیت</th>
                                    </tr>
                              </thead>
                              <tfoot>
                                    <tr>
                                          <th>شماره تراکنش</th>
                                          <th>شماره پیگیری</th>
                                          <th>تاریخ ایجاد</th>
                                          <th>تاریخ پرداخت</th>
                                          <th>وضعیت</th>
                                    </tr>
                              </tfoot>
                              <tbody>
                                    <?php if($transactions && count($transactions) > 0): ?>
                                          <?php foreach($transactions as $transaction): ?>
                                                <tr>
                                                      <td><?php echo $transaction->res_num;?></td>
                                                      <td><?php echo $transaction->ref_num;?></td>
                                                      <td><?php echo $transaction->created_at;?></td>
                                                      <td><?php echo $transaction->paid_at;?></td>
                                                      <td>
                                                      <?php if(intval($transaction->status)) :?>
                                                            <span class="badge badge-success">موفق</span>
                                                      <?php else: ?>
                                                            <span class="badge badge-danger">نا موفق</span>                                                           
                                                      <?php endif; ?>                                                           
                                                      </td>
                                                </tr>
                                          <?php endforeach; ?>
                                    <?php else: ?>
                                          
                                    <?php endif; ?>
                              </tbody>
                        </table>
                  </div>
            </div>
      </div>

</div>