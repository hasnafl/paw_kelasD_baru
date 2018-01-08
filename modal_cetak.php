<div id="cetak" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cetak Data Pasien</h4>
            </div>
                <div class="modal-body">
                <form action="cetak_data_tgl.php" method="post" target="_blank">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">Dari tanggal</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_a" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">Sampai tanggal</div>
                            </td>
                            <td align="center" >
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_b" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="cetak_data_tgl" class="btn btn-primary btn-sm" value="cetak">
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
                <div class="modal-footer">
                    <a href="cetak_data.php" target="_blank" class="btn btn-primary btn-sm">Cetak Semua Data</a>
                </div>
        </div>
    </div>
</div>