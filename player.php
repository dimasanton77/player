<!doctype html>
<html lang="en">
  <?php 
    include('partials/head.php'); 
    $select_negara = mysqli_query($koneksi,"SELECT * FROM negara");
    $select_tim = mysqli_query($koneksi,"SELECT * FROM tim");
  ?>

  <body>
  <?php include('partials/navbar.php'); ?>
  <section id="konten" class="text-center">
  <h1 class="pt-5">Player</h1>
  <button type="button" data-toggle="modal" data-target="#tambah_player" class="btn btn-primary mt-3">Tambah Player</button>
  <div class="container d-flex justify-content-center mt-5">
      <div class="row">
          <div class="col-12">
          <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Lahir</th>
                    <th>Umur</th>
                    <th>Tim</th>
                    <th>Negara</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Dimas Anton Yoga Pratama</td>
                    <td></td>
                    <td>007-07-2002</td>
                    <td>18</td>
                    <td>Persiga</td>
                    <td>Indonesia</td>
                </tr>
            </tbody>
        </table>
          </div>
      </div>
  </div>
  </section>
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="tambah_player" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Tambah Player</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <form action="player_proses.php" method="post">
                <div class="modal-body">
                        <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" required
                            class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Masukkan Nama Player">
                        </div>
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" required
                            class="form-control" name="tgl" id="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Negara</label>
                        <select class="form-control" required name="negara" id="">
                            <option value="">--NEGARA--</option>
                            <?php 
                                while($t = mysqli_fetch_array($select_negara)){
                            ?>
                            <option value="<?= $t['id']; ?>"><?= $t['nama']; ?></option>
                            <?php 
                                }
                            ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Tim</label>
                        <select class="form-control" name="tim" id="" required>
                            <option value="" >--TIM--</option>
                            <?php 
                                while($t = mysqli_fetch_array($select_tim)){
                            ?>
                            <option value="<?= $t['id']; ?>"><?= $t['nama']; ?></option>
                            <?php 
                                }
                            ?>
                        </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <?php include('partials/js.php'); ?>
  </body>
</html>