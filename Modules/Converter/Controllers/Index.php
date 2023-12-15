<?php

namespace Modules\Converter\Controllers;
use Modules\Base\BaseController;
use Modules\Converter\Models\CurrencyName;
use Modules\Converter\Models\CurrencyValue;

class Index extends BaseController {
    protected CurrencyName $currencyNameModel;
    protected CurrencyValue $currencyValueModel;

    public function __construct() {
        parent::__construct();
        $this->checkAccess();
		$this->currencyNameModel = CurrencyName::getInstance();
		$this->currencyValueModel = CurrencyValue::getInstance();

    }

    public function index() {
        $this->title = "Home page";
        $currencies = $this->currencyNameModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $currencyCode = $_POST['currency'] ?? '';
            $amount = floatval($_POST['amount'] ?? 0);
            $convertFromRuble = isset($_POST['convertFromRuble']);
            $rateEntry = $this->currencyValueModel->getNewestEntry($currencyCode);
            $rate = floatval($rateEntry['rate']);
            // echo "Rate: $rate";
            if ($convertFromRuble) {
                $convertedAmount = $amount / $rate;
            } else {
                $convertedAmount = $amount * $rate;
            }
            $convertedAmount = round($convertedAmount, 4);
            // echo "Converted amount: $convertedAmount";
            $this->content = $this->view->render('Converter/Views/index.twig', ['currencies' => $currencies, 'rate'=> $rate, 'convertedAmount' => $convertedAmount]);
        } else {
            $this->content = $this->view->render('Converter/Views/index.twig', ['currencies' => $currencies]);
        }

    }
}
