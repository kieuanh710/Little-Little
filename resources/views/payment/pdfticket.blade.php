<div class="paymentSuccess_container line">
    <div class="paymentSuccess_content">
        <div class="slideshow" style="width: 100%">
            <div class="row">
                @foreach ($payments as $item)
                <?php for($i = 1; $i <= $item->quantity; $i++){ ?>
                <div class="col l-3">
                    <div class="paymentSuccess_item">
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::size(500)->format('png')->generate(''.$detail.'')) }}">
                        <div class="paymentSuccess_item--content">
                            <h3> ALT <?php echo $i; ?></h3>
                            <span>VE CONG</span>
                            <p>---</p>
                            <div class="paymentSuccess_item--date">
                                <span>Ngay su dung: {{$item->date}}</span>
                            </div>
                        </div>
                        <i class="paymentSuccess_tick fas fa-solid fa-check"></i>
                    </div>
                </div>
                <?php } ?>
                @endforeach
            </div>
        </div>
    </div>
</div>