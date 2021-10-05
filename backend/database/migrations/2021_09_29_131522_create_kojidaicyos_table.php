<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKojidaicyosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kojidaicyos', function (Blueprint $table) {
            $table->id();
            $table->string('constnum',10);
            $table->dateTime('creationdate');
            $table->string('constname',100);
            $table->string('constname2',100);
            $table->string('depcd',4);
            $table->string('depname',30);
            $table->string('depcode2',4);
            $table->string('depname2',30);
            $table->string('contactcd',4);
            $table->string('contactname',20);
            $table->string('contactcd2',4);
            $table->string('contactname2',20);
            $table->string('ordercd',10);
            $table->string('ordername',50);
            $table->boolean('constsubstd');
            $table->string('constdiv1',4);
            $table->string('constdiv1name',30);
            $table->string('constdiv2',4);
            $table->string('constdiv2name',30);
            $table->integer('pubpridiv');
            $table->integer('principaldiv');
            $table->string('construction',100);
            $table->string('constloc',100);
            $table->string('termspay',100);
            $table->string('expdate',100);
            $table->dateTime('contractdate');
            $table->decimal('contractamt', $precision = 17, $scale = 4);
            $table->decimal('consumtaxrate', $precision = 17, $scale = 4);
            $table->decimal('contractamttax', $precision = 17, $scale = 4);
            $table->dateTime('constdate');
            $table->dateTime('expcompdate');
            $table->dateTime('deliverydate');
            $table->dateTime('constcompdate');
            $table->decimal('purchasebgt', $precision = 17, $scale = 4);
            $table->decimal('subconbgt', $precision = 17, $scale = 4);
            $table->decimal('laborbgt', $precision = 17, $scale = 4);
            $table->decimal('expensebgt', $precision = 17, $scale = 4);
            $table->decimal('purchaseamt', $precision = 17, $scale = 4);
            $table->decimal('subconamt', $precision = 17, $scale = 4);
            $table->decimal('laboramt', $precision = 17, $scale = 4);
            $table->decimal('expenseamt', $precision = 17, $scale = 4);
            $table->decimal('purchaseordamt', $precision = 17, $scale = 4);
            $table->decimal('subconordamt', $precision = 17, $scale = 4);
            $table->decimal('laborordamt', $precision = 17, $scale = 4);
            $table->decimal('expenseordamt', $precision = 17, $scale = 4);
            $table->decimal('generaladminfee', $precision = 17, $scale = 4);
            $table->decimal('generaladminexp', $precision = 17, $scale = 4);
            $table->decimal('expectedrtn', $precision = 17, $scale = 4);
            $table->dateTime('invoicedate');
            $table->decimal('invoiceamt', $precision = 17, $scale = 4);
            $table->dateTime('depositdate');
            $table->decimal('depositamt', $precision = 17, $scale = 4);
            $table->string('quotationnum',10);
            $table->string('quotationctrlnum',12);
            $table->dateTime('estimatedate');
            $table->decimal('estimateamt', $precision = 17, $scale = 4);
            $table->string('note1',100);
            $table->string('note2',100);
            $table->string('note3',100);
            $table->string('note4',100);
            $table->string('note5',100);
            $table->string('note6',100);
            $table->string('note7',100);
            $table->string('note8',100);
            $table->string('note9',100);
            $table->string('note10',100);
            $table->string('volstrmonth',7);
            $table->integer('volume01');
            $table->integer('volume02');
            $table->integer('volume03');
            $table->integer('volume04');
            $table->integer('volume05');
            $table->integer('volume06');
            $table->integer('volume07');
            $table->integer('volume08');
            $table->integer('volume09');
            $table->integer('volume10');
            $table->integer('volume11');
            $table->integer('volume12');
            $table->integer('budget01');
            $table->integer('budget02');
            $table->integer('budget03');
            $table->integer('budget04');
            $table->integer('budget05');
            $table->integer('budget06');
            $table->integer('budget07');
            $table->integer('budget08');
            $table->integer('budget09');
            $table->integer('budget10');
            $table->integer('budget11');
            $table->integer('budget12');
            $table->boolean('check0');
            $table->boolean('check1');
            $table->boolean('check2');
            $table->boolean('check3');
            $table->string('execapprovreqcd',4);
            $table->dateTime('execapprovappdate');
            $table->string('execapprovsetcd',3);
            $table->string('execapprovstatcd',2);
            $table->string('workcompflg',1);
            $table->string('workcompclass',3);
            $table->decimal('lastworkcompoutamt');
            $table->dateTime('lastworkaccoutdate');
            $table->integer('workcompeout');
            $table->dateTime('workcompcostindate');
            $table->string('buildingnum',20);
            $table->string('buildingname',80);
            $table->dateTime('registdate');
            $table->dateTime('update');
            $table->string('rgistusr',50);
            $table->string('updateusr',50);
            $table->boolean('deleteflg');
            $table->string('currentusedtermnum',50);
            $table->boolean('constledmanageflg');
            $table->string('situation',10);
            $table->string('billingcmt',100);
            $table->string('depositcmt',100);
            $table->decimal('grossmargin', $precision = 17, $scale = 4);           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kojidaicyos');
    }
}
