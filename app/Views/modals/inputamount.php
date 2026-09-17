<style>
    /* =========================================================
   CUSTOM INPUT AMOUNT MODAL
========================================================= */

.custom-amount-modal .modal-dialog {
    max-width: 560px;
    margin: 1.5rem auto;
}

.custom-amount-content {
    border: none;
    border-radius: 24px;
    overflow: hidden;
    background: #ffffff;

    box-shadow:
        0 30px 80px rgba(0, 0, 0, .25);
}


/* =========================================================
   HEADER
========================================================= */

.custom-amount-header {
    position: relative;

    padding: 22px 24px;

    display: flex;
    align-items: center;

    gap: 14px;

    color: #ffffff;

    background:
        linear-gradient(
            135deg,
            #b51e34 0%,
            #d52b43 100%
        );
}

.amount-header-icon {
    width: 48px;
    height: 48px;

    border-radius: 14px;

    background: rgba(255,255,255,.16);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 22px;

    box-shadow:
        inset 0 0 0 1px
        rgba(255,255,255,.15);
}

.custom-amount-header h5 {
    margin: 0;

    font-size: 19px;
    font-weight: 700;
}

.custom-amount-header span {
    display: block;

    margin-top: 3px;

    font-size: 12px;

    opacity: .82;
}

.amount-close-btn {
    margin-left: auto;

    width: 38px;
    height: 38px;

    border: none;
    border-radius: 50%;

    background: rgba(255,255,255,.14);

    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    transition: .2s;
}

.amount-close-btn:hover {
    background: rgba(255,255,255,.25);
}


/* =========================================================
   BODY
========================================================= */

.custom-amount-body {
    padding: 24px;
}


/* =========================================================
   TOTAL DISPLAY
========================================================= */

.amount-display {
    padding: 18px 20px;

    border-radius: 18px;

    text-align: center;

    background:
        linear-gradient(
            145deg,
            #f8f9fb,
            #ffffff
        );

    border: 1px solid #edf0f4;

    margin-bottom: 20px;
}

.amount-display > span {
    display: block;

    font-size: 11px;

    font-weight: 600;

    text-transform: uppercase;

    letter-spacing: .6px;

    color: #8b95a4;

    margin-bottom: 4px;
}

.amount-total {
    display: flex;

    justify-content: center;
    align-items: baseline;

    gap: 5px;
}

.amount-total span {
    font-family: Georgia, serif;

    font-size: 27px;

    font-weight: 700;

    color: #b51e34;
}

.amount-total strong {
    font-family: Georgia, serif;

    font-size: 42px;

    line-height: 1;

    color: #172b4d;

    font-weight: 700;
}


/* =========================================================
   RANDS / CENTS
========================================================= */

.amount-fields {
    display: grid;

    grid-template-columns:
        1fr 30px 1fr;

    align-items: end;

    gap: 8px;
}

.amount-field label {
    display: block;

    margin-bottom: 7px;

    font-size: 12px;

    font-weight: 700;

    color: #475467;

    text-transform: uppercase;

    letter-spacing: .5px;
}

.input-wrapper {
    height: 70px;

    position: relative;

    display: flex;
    align-items: center;

    border: 2px solid #c52a3c;

    border-radius: 13px;

    background: #ffffff;

    transition: .2s;
}

.input-wrapper:focus-within {
    border-color: #9f182d;

    box-shadow:
        0 0 0 4px
        rgba(197,42,60,.10);
}

.input-symbol {
    padding-left: 17px;

    font-family: Georgia, serif;

    font-size: 25px;

    font-weight: 700;

    color: #b51e34;
}

.amount-input {
    width: 100%;

    height: 100%;

    border: none;
    outline: none;

    background: transparent;

    padding: 5px 14px;

    font-family: Georgia, serif;

    font-size: 30px;

    font-weight: 700;

    text-align: center;

    color: #111827;
}

.amount-input:focus {
    outline: none;
}

.cents-input {
    padding-left: 5px;
    padding-right: 5px;
}

.amount-dot {
    height: 70px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding-top: 25px;

    font-family: Georgia, serif;

    font-size: 35px;

    font-weight: 700;

    color: #111111;
}


/* =========================================================
   QUICK AMOUNTS
========================================================= */

.quick-amount-title {
    margin-top: 20px;
    margin-bottom: 9px;

    font-size: 11px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .6px;

    color: #8b95a4;
}

.quick-amounts {
    display: grid;

    grid-template-columns:
        repeat(4, 1fr);

    gap: 8px;
}

.quick-amounts button {
    padding: 9px 5px;

    border: 1px solid #e5e7eb;

    border-radius: 9px;

    background: #f8f9fb;

    color: #344054;

    font-size: 12px;

    font-weight: 700;

    cursor: pointer;

    transition: .2s;
}

.quick-amounts button:hover {
    border-color: #b51e34;

    color: #b51e34;

    background: #fff5f6;

    transform: translateY(-1px);
}


/* =========================================================
   INFO
========================================================= */

.amount-info {
    display: flex;

    align-items: center;

    gap: 8px;

    margin-top: 18px;

    padding: 11px 13px;

    border-radius: 10px;

    background: #f7f9fc;

    color: #667085;

    font-size: 11px;
}

.amount-info i {
    color: #b51e34;

    font-size: 14px;
}


/* =========================================================
   FOOTER
========================================================= */

.custom-amount-footer {
    padding: 16px 20px;

    border-top: 1px solid #edf0f4;

    display: grid;

    grid-template-columns:
        1fr 1fr 1.35fr;

    gap: 10px;
}


/* COMMON BUTTON */

.amount-action {
    height: 48px;

    border: none;

    border-radius: 13px;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 7px;

    font-size: 13px;

    font-weight: 700;

    cursor: pointer;

    transition:
        transform .2s,
        box-shadow .2s;
}

.amount-action:hover {
    transform: translateY(-2px);
}


/* CANCEL */

.amount-action.cancel {
    background: #fbeaec;

    color: #c6283d;
}

.amount-action.cancel:hover {
    box-shadow:
        0 6px 16px
        rgba(198,40,61,.15);
}


/* CLEAR */

.amount-action.clear {
    background: #fff4d6;

    color: #a87500;
}

.amount-action.clear:hover {
    box-shadow:
        0 6px 16px
        rgba(168,117,0,.15);
}


/* PROCESS */

.amount-action.process {
    background:
        linear-gradient(
            135deg,
            #078b64,
            #047a58
        );

    color: #ffffff;

    box-shadow:
        0 7px 18px
        rgba(4,122,88,.18);
}

.amount-action.process:hover {
    box-shadow:
        0 10px 24px
        rgba(4,122,88,.28);
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 575px) {

    .custom-amount-modal .modal-dialog {
        margin: 0;

        min-height: 100vh;

        display: flex;

        align-items: flex-end;
    }

    .custom-amount-content {
        width: 100%;

        border-radius:
            23px
            23px
            0
            0;

        max-height: 95vh;
    }

    .custom-amount-header {
        padding: 17px 16px;
    }

    .amount-header-icon {
        width: 43px;
        height: 43px;

        font-size: 19px;
    }

    .custom-amount-header h5 {
        font-size: 17px;
    }

    .custom-amount-body {
        padding: 18px 15px;
    }

    .amount-display {
        padding: 15px;
    }

    .amount-total strong {
        font-size: 36px;
    }

    .amount-total span {
        font-size: 23px;
    }

    .input-wrapper {
        height: 62px;
    }

    .amount-input {
        font-size: 27px;
    }

    .amount-dot {
        height: 62px;

        font-size: 30px;
    }

    .quick-amounts {
        grid-template-columns:
            repeat(4, 1fr);
    }

    .custom-amount-footer {
        padding: 12px 15px;

        gap: 7px;
    }

    .amount-action {
        height: 45px;

        font-size: 12px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 380px) {

    .custom-amount-footer {
        grid-template-columns:
            1fr 1fr 1fr;
    }

    .amount-action span {
        font-size: 11px;
    }

    .quick-amounts button {
        font-size: 11px;
    }

}
</style>
<!-- =========================================================
     CUSTOM INPUT AMOUNT MODAL
========================================================= -->

<div class="modal fade custom-amount-modal"
     id="inputAmountModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content custom-amount-content">

            <!-- HEADER -->
            <div class="custom-amount-header">

                <div class="amount-header-icon">
                    <i class="bi bi-cash-stack"></i>
                </div>

                <div>
                    <h5>Enter Amount</h5>
                    <span>Enter your preferred airtime amount</span>
                </div>

                <button type="button"
                        class="amount-close-btn"
                        onclick="closeInputAmount()">

                    <i class="bi bi-x-lg"></i>

                </button>

            </div>


            <!-- BODY -->
            <div class="custom-amount-body">

                <!-- AMOUNT DISPLAY -->
                <div class="amount-display">

                    <span>Custom Airtime Amount</span>

                    <div class="amount-total">
                        <span id="amountCurrency">R</span>
                        <strong id="amountPreview">0.00</strong>
                    </div>

                </div>


                <!-- RANDS / CENTS -->
                <div class="amount-fields">

                    <!-- RANDS -->
                    <div class="amount-field">

                        <label>Rands</label>

                        <div class="input-wrapper">

                            <span class="input-symbol">R</span>

                            <input
                                type="text"
                                id="randsInput"
                                class="amount-input"
                                value="0"
                                inputmode="numeric"
                                maxlength="6"
                                autocomplete="off"
                                oninput="updateAmountPreview()">

                        </div>

                    </div>


                    <!-- DECIMAL -->
                    <div class="amount-dot">
                        .
                    </div>


                    <!-- CENTS -->
                    <div class="amount-field">

                        <label>Cents</label>

                        <div class="input-wrapper">

                            <input
                                type="text"
                                id="centsInput"
                                class="amount-input cents-input"
                                value="00"
                                inputmode="numeric"
                                maxlength="2"
                                autocomplete="off"
                                oninput="updateAmountPreview()">

                        </div>

                    </div>

                </div>


                <!-- QUICK AMOUNTS -->
                <div class="quick-amount-title">
                    Quick Amount
                </div>

                <div class="quick-amounts">

                    <button type="button"
                            onclick="setCustomAmount(50)">
                        R50
                    </button>

                    <button type="button"
                            onclick="setCustomAmount(100)">
                        R100
                    </button>

                    <button type="button"
                            onclick="setCustomAmount(150)">
                        R150
                    </button>

                    <button type="button"
                            onclick="setCustomAmount(200)">
                        R200
                    </button>

                </div>


                <!-- INFO -->
                <div class="amount-info">

                    <i class="bi bi-info-circle"></i>

                    <span>
                        Enter the amount you want to purchase.
                    </span>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="custom-amount-footer">

                <button type="button"
                        class="amount-action cancel"
                        onclick="closeInputAmount()">

                    <i class="bi bi-x-circle"></i>

                    <span>Cancel</span>

                </button>


                <button type="button"
                        class="amount-action clear"
                        onclick="clearInputAmount()">

                    <i class="bi bi-arrow-counterclockwise"></i>

                    <span>Clear</span>

                </button>


                <button type="button"
                        class="amount-action process"
                        onclick="processInputAmount()">

                    <span>Process</span>

                    <i class="bi bi-arrow-right"></i>

                </button>

            </div>

        </div>

    </div>

</div>