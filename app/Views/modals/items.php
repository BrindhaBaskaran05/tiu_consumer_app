<!-- =========================================================
     CELL C AIRTIME MODAL
========================================================= -->

<div class="modal fade cellc-modal"
     id="cellcModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <!-- MODAL HEADER -->
            <div class="cellc-modal-header">

                <div class="cellc-header-left">

                    <div class="cellc-logo-box">

                        <img
                            src="<?= base_url('assets/images/services/prov3.png') ?>"
                            alt="Cell C"
                        >

                    </div>

                    <div>

                        <h5>
                            Cell C Airtime
                        </h5>

                        <p>
                            Select an airtime amount
                        </p>

                    </div>

                </div>

                <button
                    type="button"
                    class="cellc-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                    <i class="bi bi-x-lg"></i>

                </button>

            </div>


            <!-- MODAL BODY -->
            <div class="cellc-modal-body">

                <div class="cellc-title-row">

                    <div>
                        <h6>Select Amount</h6>

                        <span>
                            Choose the airtime value you want
                        </span>
                    </div>

                    <div class="cellc-selected-badge"
                         id="selectedAmountBadge">

                        Select

                    </div>

                </div>


                <!-- AMOUNT GRID -->
                <div class="cellc-amount-grid">
<button
                        type="button"
                        class="cellc-amount"
                        data-amount="5"
                        onclick="openInputAmount(this)">

                        <!--span class="currency">R</span-->
                        <strong style="
    font-size: 16px;
">INPUT AMOUNT</strong>

                    </button>
                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="5"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>5</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="10"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>10</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="20"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>20</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="25"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>25</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="30"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>30</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="35"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>35</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="50"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>50</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="60"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>60</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="70"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>70</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="100"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>100</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="150"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>150</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="200"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>200</strong>

                    </button>


                    <button
                        type="button"
                        class="cellc-amount"
                        data-amount="300"
                        onclick="selectCellCAmount(this)">

                        <span class="currency">R</span>
                        <strong>300</strong>

                    </button>

                </div>


                <!-- SELECTED AMOUNT -->
                <div class="cellc-selection">

                    <div class="selection-icon">

                        <i class="bi bi-phone-fill"></i>

                    </div>

                    <div class="selection-info">

                        <span>Selected Airtime</span>

                        <strong id="selectedCellCAmount">
                            No amount selected
                        </strong>

                    </div>

                    <div class="selection-check"
                         id="selectionCheck">

                        <i class="bi bi-check2"></i>

                    </div>

                </div>

            </div>


            <!-- MODAL FOOTER -->
            <div class="cellc-modal-footer">

                <button
                    type="button"
                    class="cellc-cancel-btn"
                    data-bs-dismiss="modal">

                    Cancel

                </button>

                <button
                    type="button"
                    class="cellc-continue-btn"
                    id="cellcContinueBtn"
                    onclick="continueCellCAirtime()"
                    disabled>

                    Continue

                    <i class="bi bi-arrow-right"></i>

                </button>

            </div>

        </div>

    </div>

</div>
<?= $this->include('modals/inputamount') ?>
<script>

let cellCModal;
let selectedCellCAmount = null;


/* =========================================================
   OPEN CELL C MODAL
========================================================= */

function openCellCModal() {

    selectedCellCAmount = null;

    // Remove previous selection
    document
        .querySelectorAll('.cellc-amount')
        .forEach(function(button) {

            button.classList.remove('selected');

        });


    // Reset selection information

    document.getElementById(
        'selectedCellCAmount'
    ).textContent = 'No amount selected';


    document.getElementById(
        'selectedAmountBadge'
    ).textContent = 'Select';


    document.getElementById(
        'selectedAmountBadge'
    ).classList.remove('active');


    document.getElementById(
        'selectionCheck'
    ).classList.remove('active');


    document.getElementById(
        'cellcContinueBtn'
    ).disabled = true;


    // Open modal

    cellCModal = new bootstrap.Modal(
        document.getElementById('cellcModal')
    );

    cellCModal.show();
}


/* =========================================================
   SELECT AMOUNT
========================================================= */

function selectCellCAmount(button) {

    // Remove selected state
    document
        .querySelectorAll('.cellc-amount')
        .forEach(function(item) {

            item.classList.remove('selected');

        });


    // Select clicked amount
    button.classList.add('selected');


    selectedCellCAmount =
        button.getAttribute('data-amount');


    // Update badge

    document.getElementById(
        'selectedAmountBadge'
    ).textContent =
        'R ' + selectedCellCAmount;

    document.getElementById(
        'selectedAmountBadge'
    ).classList.add('active');


    // Update bottom selection

    document.getElementById(
        'selectedCellCAmount'
    ).textContent =
        'R ' + selectedCellCAmount +
        ' Airtime';


    document.getElementById(
        'selectionCheck'
    ).classList.add('active');


    // Enable Continue

    document.getElementById(
        'cellcContinueBtn'
    ).disabled = false;

}


/* =========================================================
   CONTINUE
========================================================= */

function continueCellCAirtime() {

    if (!selectedCellCAmount) {
        return;
    }


    console.log(
        'Selected Cell C Amount:',
        selectedCellCAmount
    );


    /*
     * HERE YOU CAN REDIRECT TO YOUR
     * CELL C AIRTIME PURCHASE PAGE.
     *
     * Example:
     *
     * window.location.href =
     *     "<?= base_url('cellc/airtime') ?>/" +
     *     selectedCellCAmount;
     */


    // Example confirmation

    alert(
        'Cell C Airtime Selected: R ' +
        selectedCellCAmount
    );
}

/* =========================================================
   CUSTOM INPUT AMOUNT
========================================================= */

let inputAmountModal;


/*
 * Open Custom Amount Modal
 */
function openInputAmount(button) {

    // Clear previous values
    document.getElementById('randsInput').value = '0';
    document.getElementById('centsInput').value = '00';

    updateAmountPreview();


    /*
     * Hide Cell C modal temporarily
     */
    const cellcModalElement =
        document.getElementById('cellcModal');

    const cellcModalInstance =
        bootstrap.Modal.getInstance(cellcModalElement);

    if (cellcModalInstance) {
        cellcModalInstance.hide();
    }


    /*
     * Open Custom Amount Modal
     */
    inputAmountModal =
        new bootstrap.Modal(
            document.getElementById('inputAmountModal'),
            {
                backdrop: 'static',
                keyboard: false
            }
        );

    inputAmountModal.show();
}


/*
 * Update amount preview
 */
function updateAmountPreview() {

    let rands =
        document.getElementById('randsInput').value;

    let cents =
        document.getElementById('centsInput').value;


    /*
     * Allow numbers only
     */
    rands = rands.replace(/\D/g, '');
    cents = cents.replace(/\D/g, '');


    /*
     * Limit cents to 2 digits
     */
    if (cents.length > 2) {
        cents = cents.substring(0, 2);
    }


    /*
     * Default values
     */
    if (rands === '') {
        rands = '0';
    }

    if (cents === '') {
        cents = '00';
    }


    document.getElementById('randsInput').value =
        rands;

    document.getElementById('centsInput').value =
        cents;


    /*
     * Format cents
     */
    cents = cents.padEnd(2, '0');


    /*
     * Update preview
     */
    document.getElementById(
        'amountPreview'
    ).textContent =
        parseInt(rands, 10) + '.' + cents;

}


/*
 * Set quick amount
 */
function setCustomAmount(amount) {

    document.getElementById(
        'randsInput'
    ).value = amount;

    document.getElementById(
        'centsInput'
    ).value = '00';

    updateAmountPreview();

}


/*
 * Clear
 */
function clearInputAmount() {

    document.getElementById(
        'randsInput'
    ).value = '0';

    document.getElementById(
        'centsInput'
    ).value = '00';

    updateAmountPreview();

}


/*
 * Close Custom Amount Modal
 */
function closeInputAmount() {

    if (inputAmountModal) {

        inputAmountModal.hide();

    }

    /*
     * Re-open Cell C modal
     */
    setTimeout(function() {

        openCellCModal();

    }, 250);

}


/*
 * Process Custom Amount
 */
function processInputAmount() {

    let rands =
        document.getElementById(
            'randsInput'
        ).value;

    let cents =
        document.getElementById(
            'centsInput'
        ).value;


    rands = rands.replace(/\D/g, '');
    cents = cents.replace(/\D/g, '');


    if (rands === '') {
        rands = '0';
    }

    if (cents === '') {
        cents = '00';
    }

    cents = cents.padEnd(2, '0');


    let amount =
        parseFloat(
            rands + '.' + cents
        );


    /*
     * Validate amount
     */
    if (amount <= 0) {

        alert(
            'Please enter a valid amount.'
        );

        return;
    }


    /*
     * Set selected amount
     *
     * This connects the custom amount
     * to your existing Cell C modal.
     */

    selectedCellCAmount =
        amount.toFixed(2);


    /*
     * Close custom modal
     */

    if (inputAmountModal) {

        inputAmountModal.hide();

    }


    /*
     * Update Cell C modal
     */

    setTimeout(function() {

        /*
         * Re-open Cell C modal
         */
        openCellCModal();


        /*
         * Update selected amount
         */

        document.getElementById(
            'selectedAmountBadge'
        ).textContent =
            'R ' + amount.toFixed(2);

        document.getElementById(
            'selectedAmountBadge'
        ).classList.add('active');


        document.getElementById(
            'selectedCellCAmount'
        ).textContent =
            'R ' + amount.toFixed(2) +
            ' Airtime';


        document.getElementById(
            'selectionCheck'
        ).classList.add('active');


        document.getElementById(
            'cellcContinueBtn'
        ).disabled = false;


    }, 300);

}
</script>
