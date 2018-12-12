class DonationStatusBar {
    constructor(el) {
        this.el = el;
        this.yesEndEl = this.el.querySelector('.donation-status-bar__end--yes');
        this.noEndEl = this.el.querySelector('.donation-status-bar__end--no');
        this.yesBarEl = this.el.querySelector('.donation-status-bar__bar-yes');

        this.yes = 0;
        this.no = 0;

        this._render();
    }

    donate(value, yes) {
        if (yes) {
            this.yes += value;
        } else {
            this.no += value;
        }

        this._render();
    }

    _render() {
        const total = this.yes + this.no;
        const yesValue = total === 0 ? 50 : (this.yes / total) * 100;
        const noValue = total === 0 ? 50 : (this.no / total) * 100;

        this.yesEndEl.innerHTML = `${yesValue.toFixed(0)}%`;
        this.noEndEl.innerHTML = `${noValue.toFixed(0)}%`;

        this.yesBarEl.style.width = `${yesValue}%`;
    }
}

DonationStatusBar.YES = true;
DonationStatusBar.NO = false;