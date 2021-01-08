<section id="qa" class="qa">
  <div class="container">
    <div id="accordion">
      <div class="section-title" data-aos="fade-up">
          <h2>Question & Answer</h2>
          <p>Berikut Merupakan Pertanyaan yang Sering Ditanyakan Pada Kami</p>
      </div>
      <?php 
                $data = $db->query("SELECT * FROM faq ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
        ?>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $row['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $row['id'] ?>">
              <?= $row['question'] ?>
              </button>
            </h5>
          </div>

          <div id="collapse<?= $row['id'] ?>" class="collapse" aria-labelledby="heading<?= $row['id'] ?>" data-parent="#accordion">
            <div class="card-body">
            <?= $row['answer'] ?>
            </div>
          </div>
        </div>
        <?php } ?>

    </div>
  </div>
</section>