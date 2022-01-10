<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcComposantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_composants', function (Blueprint $table) {
            $table->id();
            $table->string('code_composant');
            $table->integer('quantite');
            $table->enum('type',['RM','PP','SP']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
        $this->populateFunction();
    }

    private function populateFunction(){
        \Illuminate\Support\Facades\DB::statement("INSERT INTO `stocks`.`bc_composants` (`code_composant`, `quantite`, `type`) VALUES
 ('RM0001', '0', 'RM'),
 ('RM0002', '0', 'RM'),
 ('RM0003', '0', 'RM'),
 ('RM0004', '0', 'RM'),
 ('RM0005', '0', 'RM'),
 ('RM0006', '0', 'RM'),
 ('RM0007', '0', 'RM'),
 ('RM0008', '0', 'RM'),
 ('RM0009', '0', 'RM'),
 ('RM0010', '0', 'RM'),
 ('RM0011', '0', 'RM'),
 ('RM0012', '0', 'RM'),
 ('RM0013', '0', 'RM'),
 ('RM0014', '0', 'RM'),
 ('RM0015', '0', 'RM'),
 ('RM0016', '0', 'RM'),
 ('RM0017', '0', 'RM'),
 ('RM0018', '0', 'RM'),
 ('RM0019', '0', 'RM'),
 ('RM0020', '0', 'RM'),
 ('RM0021', '0', 'RM'),
 ('RM0022', '0', 'RM'),
 ('RM0023', '0', 'RM'),
 ('RM0024', '0', 'RM'),
 ('RM0025', '0', 'RM'),
 ('RM0026', '0', 'RM'),
 ('RM0027', '0', 'RM'),
 ('RM0028', '0', 'RM'),
 ('RM0029', '0', 'RM'),
 ('RM0030', '0', 'RM'),
 ('RM0031', '0', 'RM'),
 ('RM0032', '0', 'RM'),
 ('RM0033', '0', 'RM'),
 ('RM0034', '0', 'RM'),
 ('RM0035', '0', 'RM'),
 ('RM0036', '0', 'RM'),
 ('RM0037', '0', 'RM'),
 ('RM0038', '0', 'RM'),
 ('RM0039', '0', 'RM'),
 ('RM0040', '0', 'RM'),
 ('RM0041', '0', 'RM'),
 ('RM0042', '0', 'RM'),
 ('RM0043', '0', 'RM'),
 ('RM0044', '0', 'RM'),
 ('RM0045', '0', 'RM'),
 ('RM0046', '0', 'RM'),
 ('RM0047', '0', 'RM'),
 ('RM0048', '0', 'RM'),
 ('RM0049', '0', 'RM'),
 ('RM0050', '0', 'RM'),
 ('RM0051', '0', 'RM'),
 ('RM0052', '0', 'RM'),
 ('RM0053', '0', 'RM'),
 ('RM0054', '0', 'RM'),
 ('RM0055', '0', 'RM'),
 ('RM0056', '0', 'RM'),
 ('RM0057', '0', 'RM'),
 ('RM0058', '0', 'RM'),
 ('RM0059', '0', 'RM'),
 ('RM0060', '0', 'RM'),
 ('RM0061', '0', 'RM'),
 ('RM0062', '0', 'RM'),
 ('RM0063', '0', 'RM'),
 ('RM0064', '0', 'RM'),
 ('RM0065', '0', 'RM'),
 ('RM0066', '0', 'RM'),
 ('RM0067', '0', 'RM'),
 ('RM0068', '0', 'RM'),
 ('RM0069', '0', 'RM'),
 ('RM0070', '0', 'RM'),
 ('RM0071', '0', 'RM'),
 ('RM0072', '0', 'RM'),
 ('RM0073', '0', 'RM'),
 ('RM0074', '0', 'RM'),
 ('RM0075', '0', 'RM'),
 ('RM0076', '0', 'RM'),
 ('RM0077', '0', 'RM'),
 ('RM0078', '0', 'RM'),
 ('RM0079', '0', 'RM'),
 ('RM0080', '0', 'RM'),
 ('RM0081', '0', 'RM'),
 ('RM0082', '0', 'RM'),
 ('RM0083', '0', 'RM'),
 ('RM0084', '0', 'RM'),
 ('RM0085', '0', 'RM'),
 ('RM0086', '0', 'RM'),
 ('RM0087', '0', 'RM'),
 ('RM0088', '0', 'RM'),
 ('RM0089', '0', 'RM'),
 ('RM0090', '0', 'RM'),
 ('RM0091', '0', 'RM'),
 ('RM0092', '0', 'RM'),
 ('RM0093', '0', 'RM'),
 ('RM0094', '0', 'RM'),
 ('RM0095', '0', 'RM'),
 ('RM0096', '0', 'RM'),
 ('RM0097', '0', 'RM'),
 ('RM0098', '0', 'RM'),
 ('RM0099', '0', 'RM'),
 ('RM0100', '0', 'RM'),
 ('RM0101', '0', 'RM'),
 ('RM0102', '0', 'RM'),
 ('RM0103', '0', 'RM'),
 ('RM0104', '0', 'RM'),
 ('RM0105', '0', 'RM'),
 ('RM0106', '0', 'RM'),
 ('RM0107', '0', 'RM'),
 ('RM0108', '0', 'RM'),
 ('RM0109', '0', 'RM'),
 ('RM0111', '0', 'RM'),
 ('RM0112', '0', 'RM'),
 ('RM0113', '0', 'RM'),
 ('RM0114', '0', 'RM'),
 ('RM0115', '0', 'RM'),
 ('RM0116', '0', 'RM'),
 ('RM0117', '0', 'RM'),
 ('RM0118', '0', 'RM'),
 ('RM0119', '0', 'RM'),
 ('RM0120', '0', 'RM'),
 ('PP0001', '0', 'PP'),
 ('PP0002', '0', 'PP'),
 ('PP0003', '0', 'PP'),
 ('PP0004', '0', 'PP'),
 ('PP0005', '0', 'PP'),
 ('PP0006', '0', 'PP'),
 ('PP0007', '0', 'PP'),
 ('PP0008', '0', 'PP'),
 ('PP0009', '0', 'PP'),
 ('PP0010', '0', 'PP'),
 ('PP0011', '0', 'PP'),
 ('PP0012', '0', 'PP'),
 ('PP0013', '0', 'PP'),
 ('PP0014', '0', 'PP'),
 ('PP0015', '0', 'PP'),
 ('PP0016', '0', 'PP'),
 ('PP0017', '0', 'PP'),
 ('PP0018', '0', 'PP'),
 ('PP0019', '0', 'PP'),
 ('PP0020', '0', 'PP'),
 ('PP0021', '0', 'PP'),
 ('PP0022', '0', 'PP'),
 ('PP0023', '0', 'PP'),
 ('PP0024', '0', 'PP'),
 ('PP0025', '0', 'PP'),
 ('PP0026', '0', 'PP'),
 ('PP0027', '0', 'PP'),
 ('PP0028', '0', 'PP'),
 ('PP0029', '0', 'PP'),
 ('PP0030', '0', 'PP'),
 ('PP0031', '0', 'PP'),
 ('PP0032', '0', 'PP'),
 ('PP0033', '0', 'PP'),
 ('PP0034', '0', 'PP'),
 ('PP0035', '0', 'PP'),
 ('PP0036', '0', 'PP'),
 ('PP0037', '0', 'PP'),
 ('PP0038', '0', 'PP'),
 ('PP0039', '0', 'PP'),
 ('PP0040', '0', 'PP'),
 ('PP0041', '0', 'PP'),
 ('PP0042', '0', 'PP'),
 ('PP0043', '0', 'PP'),
 ('PP0044', '0', 'PP'),
 ('PP0045', '0', 'PP'),
 ('PP0046', '0', 'PP'),
 ('PP0047', '0', 'PP'),
 ('PP0048', '0', 'PP'),
 ('PP0049', '0', 'PP'),
 ('PP0050', '0', 'PP'),
 ('PP0051', '0', 'PP'),
 ('PP0052', '0', 'PP'),
 ('PP0053', '0', 'PP'),
 ('PP0054', '0', 'PP'),
 ('PP0055', '0', 'PP'),
 ('PP0056', '0', 'PP'),
 ('PP0057', '0', 'PP'),
 ('PP0058', '0', 'PP'),
 ('PP0059', '0', 'PP'),
 ('PP0060', '0', 'PP'),
 ('PP0061', '0', 'PP'),
 ('PP0062', '0', 'PP'),
 ('PP0063', '0', 'PP'),
 ('PP0064', '0', 'PP'),
 ('PP0065', '0', 'PP'),
 ('PP0066', '0', 'PP'),
 ('PP0067', '0', 'PP'),
 ('PP0068', '0', 'PP'),
 ('PP0069', '0', 'PP'),
 ('PP0070', '0', 'PP'),
 ('PP0071', '0', 'PP'),
 ('PP0072', '0', 'PP'),
 ('PP0073', '0', 'PP'),
 ('PP0074', '0', 'PP'),
 ('PP0075', '0', 'PP'),
 ('PP0076', '0', 'PP'),
 ('PP0077', '0', 'PP'),
 ('PP0078', '0', 'PP'),
 ('PP0079', '0', 'PP'),
 ('PP0080', '0', 'PP'),
 ('PP0081', '0', 'PP'),
 ('PP0082', '0', 'PP'),
 ('PP0083', '0', 'PP'),
 ('PP0084', '0', 'PP'),
 ('PP0085', '0', 'PP'),
 ('PP0086', '0', 'PP'),
 ('PP0087', '0', 'PP'),
 ('PP0088', '0', 'PP'),
 ('PP0089', '0', 'PP'),
 ('PP0090', '0', 'PP'),
 ('PP0091', '0', 'PP'),
 ('PP0092', '0', 'PP'),
 ('PP0093', '0', 'PP'),
 ('PP0094', '0', 'PP'),
 ('PP0095', '0', 'PP'),
 ('PP0096', '0', 'PP'),
 ('PP0097', '0', 'PP'),
 ('PP0098', '0', 'PP'),
 ('PP0099', '0', 'PP'),
 ('PP0100', '0', 'PP'),
 ('PP0101', '0', 'PP'),
 ('PP0102', '0', 'PP'),
 ('PP0103', '0', 'PP'),
 ('PP0104', '0', 'PP'),
 ('PP0105', '0', 'PP'),
 ('PP0106', '0', 'PP'),
 ('PP0107', '0', 'PP'),
 ('PP0108', '0', 'PP'),
 ('PP0109', '0', 'PP'),
 ('PP0110', '0', 'PP'),
 ('PP0111', '0', 'PP'),
 ('PP0112', '0', 'PP'),
 ('PP0113', '0', 'PP'),
 ('PP0114', '0', 'PP'),
 ('PP0115', '0', 'PP'),
 ('PP0116', '0', 'PP'),
 ('PP0117', '0', 'PP'),
 ('PP0118', '0', 'PP'),
 ('PP0119', '0', 'PP'),
 ('PP0120', '0', 'PP'),
 ('PP0121', '0', 'PP'),
 ('PP0122', '0', 'PP'),
 ('PP0123', '0', 'PP'),
 ('PP0124', '0', 'PP'),
 ('PP0125', '0', 'PP'),
 ('PP0126', '0', 'PP'),
 ('PP0127', '0', 'PP'),
 ('PP0128', '0', 'PP'),
 ('PP0129', '0', 'PP'),
 ('PP0130', '0', 'PP'),
 ('PP0131', '0', 'PP'),
 ('PP0132', '0', 'PP'),
 ('PP0133', '0', 'PP'),
 ('PP0134', '0', 'PP'),
 ('PP0135', '0', 'PP'),
 ('PP0136', '0', 'PP'),
 ('PP0137', '0', 'PP'),
 ('PP0138', '0', 'PP'),
 ('PP0139', '0', 'PP'),
 ('PP0140', '0', 'PP'),
 ('PP0141', '0', 'PP'),
 ('PP0142', '0', 'PP'),
 ('PP0143', '0', 'PP'),
 ('PP0144', '0', 'PP'),
 ('PP0145', '0', 'PP'),
 ('PP0146', '0', 'PP'),
 ('PP0147', '0', 'PP'),
 ('PP0148', '0', 'PP'),
 ('PP0149', '0', 'PP'),
 ('PP0150', '0', 'PP'),
 ('PP0151', '0', 'PP'),
 ('PP0152', '0', 'PP'),
 ('PP0153', '0', 'PP'),
 ('PP0154', '0', 'PP'),
 ('PP0155', '0', 'PP'),
 ('PP0156', '0', 'PP'),
 ('PP0157', '0', 'PP'),
 ('PP0158', '0', 'PP'),
 ('PP0159', '0', 'PP'),
 ('PP0160', '0', 'PP'),
 ('PP0161', '0', 'PP'),
 ('PP0162', '0', 'PP'),
 ('PP0163', '0', 'PP'),
 ('PP0164', '0', 'PP'),
 ('PP0165', '0', 'PP'),
 ('PP0166', '0', 'PP'),
 ('PP0167', '0', 'PP'),
 ('PP0168', '0', 'PP'),
 ('PP0169', '0', 'PP'),
 ('PP0170', '0', 'PP'),
 ('PP0171', '0', 'PP'),
 ('PP0172', '0', 'PP'),
 ('SP0001', '0', 'SP'),
 ('SP0002', '0', 'SP'),
 ('SP0003', '0', 'SP'),
 ('SP0004', '0', 'SP'),
 ('SP0005', '0', 'SP'),
 ('SP0006', '0', 'SP'),
 ('SP0007', '0', 'SP'),
 ('SP0008', '0', 'SP'),
 ('SP0009', '0', 'SP'),
 ('SP0010', '0', 'SP'),
 ('SP0011', '0', 'SP'),
 ('SP0012', '0', 'SP'),
 ('SP0013', '0', 'SP'),
 ('SP0014', '0', 'SP'),
 ('SP0015', '0', 'SP'),
 ('SP0016', '0', 'SP'),
 ('SP0017', '0', 'SP'),
 ('SP0018', '0', 'SP'),
 ('SP0019', '0', 'SP'),
 ('SP0020', '0', 'SP'),
 ('SP0021', '0', 'SP'),
 ('SP0022', '0', 'SP'),
 ('SP0023', '0', 'SP'),
 ('SP0024', '0', 'SP'),
 ('SP0025', '0', 'SP'),
 ('SP0026', '0', 'SP'),
 ('SP0027', '0', 'SP'),
 ('SP0028', '0', 'SP'),
 ('SP0029', '0', 'SP'),
 ('SP0030', '0', 'SP'),
 ('SP0031', '0', 'SP'),
 ('SP0032', '0', 'SP'),
 ('SP0033', '0', 'SP'),
 ('SP0034', '0', 'SP'),
 ('SP0035', '0', 'SP'),
 ('SP0036', '0', 'SP'),
 ('SP0037', '0', 'SP'),
 ('SP0038', '0', 'SP'),
 ('SP0039', '0', 'SP'),
 ('SP0040', '0', 'SP'),
 ('SP0041', '0', 'SP'),
 ('SP0042', '0', 'SP'),
 ('SP0043', '0', 'SP'),
 ('SP0044', '0', 'SP'),
 ('SP0045', '0', 'SP'),
 ('SP0046', '0', 'SP'),
 ('SP0047', '0', 'SP');");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bc_composants', function (Blueprint $table) {
            //
        });
    }
}
