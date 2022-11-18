class CartRemoveButton extends HTMLElement {
    constructor() {
        super();
        this.addEventListener("click", e => {
            e.preventDefault(), this.closest("cart-items").updateQuantity(this.dataset.index, 0)
        })
    }
}

customElements.define("cart-remove-button", CartRemoveButton);

class CartItems extends HTMLElement {
    constructor() {
        super();
        this.lineItemStatusElement = document.getElementById("shopping-cart-line-item-status"), this.currentItemCount = Array.from(this.querySelectorAll('[name="updates[]"]')).reduce((e, t) => e + parseInt(t.value), 0), this.debouncedOnChange = debounce(e => {
            this.onChange(e)
        }, 300), this.addEventListener("change", this.debouncedOnChange.bind(this))
    }

    onChange(e) {
        this.updateQuantity(e.target.dataset.index, e.target.value, document.activeElement.getAttribute("name"))
    }

    getSectionsToRender() {
        return [{
            id: "main-cart-items",
            section: document.getElementById("main-cart-items").dataset.id,
            selector: ".js-contents"
        }, {
            id: "cart-icon-bubble",
            section: "cart-icon-bubble",
            selector: ".shopify-section"
        }, {
            id: "cart-live-region-text",
            section: "cart-live-region-text",
            selector: ".shopify-section"
        }, {
            id: "main-cart-footer",
            section: document.getElementById("main-cart-footer").dataset.id,
            selector: ".js-contents"
        }]
    }


    updateLiveRegions(e, t) {
        this.currentItemCount === t && (document.getElementById(`Line-item-error-${e}`).querySelector(".cart-item__error-text").innerHTML = window.cartStrings.quantityError.replace("[quantity]", document.getElementById(`Quantity-${e}`).value)), this.currentItemCount = t, this.lineItemStatusElement.setAttribute("aria-hidden", !0);
        const i = document.getElementById("cart-live-region-text");
        i.setAttribute("aria-hidden", !1), setTimeout(() => {
            i.setAttribute("aria-hidden", !0)
        }, 1e3)
    }

    getSectionInnerHTML(e, t) {
        return new DOMParser().parseFromString(e, "text/html").querySelector(t).innerHTML
    }

    enableLoading(e) {
        document.getElementById("main-cart-items").classList.add("cart__items--disabled"), this.querySelectorAll(`#CartItem-${e} .loading-overlay`).forEach(t => t.classList.remove("hidden")), document.activeElement.blur(), this.lineItemStatusElement.setAttribute("aria-hidden", !1)
    }

    disableLoading() {
        document.getElementById("main-cart-items").classList.remove("cart__items--disabled")
    }
}

customElements.define("cart-items", CartItems);
//# sourceMappingURL=/s/files/1/0080/9035/3717/t/3/assets/cart.js.map
$(document).ready(function () {
    let totalAll = 0;

    $('.total_price').each(function(index, value) {
        totalAll += parseInt(value.value);
    });
    let totalAllFomat = numeral( totalAll).format('0,0');
    let totalPayment = parseInt(totalAll);
    let totalPaymentFomat = numeral(totalPayment).format('0,0');

    $('#total_all').text(totalAllFomat);
    $('#total_payment').text(totalPaymentFomat);
    $('input[name=total_all]').val(totalAll);
    $('input[name=total_payment]').val(totalPayment);
})

function changeQuantity(e) {
    let slug = e.id;
    let quantity = e.value;
    let price = $('.'+ slug + (' .price')).val();
    $('.'+ slug + (' .total_price')).val();
    $('.'+ slug + (' .input_quantity')).val(quantity);
    let total = quantity * price;
    let totalFomat = numeral( total).format('0,0');
    $('.'+ slug + (' .total_price_all')).text(totalFomat);
    $('.'+ slug + ('  .total_price')).val(total);

    let totalAll = 0;
    $(' .total_price').each(function(index, value) {
        totalAll += parseInt(value.value);
    });
    console.log(totalAll)
    let totalAllFomat = numeral( totalAll).format('0,0');
    let totalPayment = parseInt(totalAll);
    let totalPaymentFomat = numeral(totalPayment).format('0,0');


    $('#total_all').text(totalAllFomat);
    $('#total_payment').text(totalPaymentFomat);
    $('input[name=total_all]').val(totalAll);
    $('input[name=total_payment]').val(totalPayment);


}