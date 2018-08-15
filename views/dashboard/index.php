<?php
/* @var $this \yii\web\View */

use backend\themes\fw7\assets\DashboardAsset;

DashboardAsset::register($this);
?>
<div class="page">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="left">
                <a href="#" class="link icon-only panel-open" data-panel="left">
                    <i class="icon f7-icons ios-only">menu</i>
                    <i class="icon material-icons md-only">menu</i>
                </a>
            </div>
            <div class="title sliding">Dashboard Bank<span class="subtitle">Warehouse System</span></div>
        </div>
    </div>
    <div class="page-content">
        <div class="block-title searchbar-found">Yearly target (in Mio)</div>
        <div class="data-table">
            <table id="bank-yearly-target">
                <thead>
                    <tr>
                        <th class="label-cell">Type</th>
                        <th class="numeric-cell">Target</th>
                        <th class="numeric-cell">Achieve</th>
                        <th class="numeric-cell">Gap</th>
                        <th class="numeric-cell">Progress</th>
                    </tr>
                </thead>
                <tbody id="bank-yearly-target-body">
                    <tr>
                        <td class="label-cell">Frozen yogurt</td>
                        <td class="numeric-cell">159</td>
                        <td class="numeric-cell">159</td>
                        <td class="numeric-cell">159</td>
                        <td class="numeric-cell">159</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="block-title searchbar-found">Month to date (in Mio)</div>
        <div class="block-title searchbar-found">Daily Sales</div>
    </div>
</div>