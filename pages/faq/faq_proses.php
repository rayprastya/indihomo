<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    
    $insert = $db->query('INSERT INTO faq 
                        (question,answer) 
                        VALUES 
                        ("'.$question.'","'.$answer.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=faq&s=faq"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    
    $update = $db->query('UPDATE faq SET question="'.$question.'",
                                            answer="'.$answer.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=faq&s=faq"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM faq WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=faq&s=faq"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}