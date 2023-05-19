<?php
    include_once("db_connection.php");
    if(isset($_GET['id']) && isset($_GET['nama_barang'])&& isset($_GET['stok']) && isset($_GET['satuan']))
    {
            $firstbarangid = "B0001";
            $namabarang = $_GET['nama_barang'];
            $jumlahbarang = (int)$_GET['stok'];
            $id_request = $_GET['id'];
            $satuanbarang = $_GET['satuan'];
                                
            $selectbarang = "SELECT * FROM barang ORDER BY id_barang desc LIMIT 1";
            $resultselectbarang = $mysqli->query($selectbarang);
            $rowbarang = $resultselectbarang -> fetch_assoc();

                                
                if(mysqli_num_rows($resultselectbarang) === 0)
                {
                    $insertbarangfirst = "INSERT INTO barang (id_barang,nama_barang,stok,satuan) VALUES ('$firstbarangid','$namabarang','$jumlahbarang','$satuanbarang')";
                    $resultinsertbarangfirst = mysqli_query($mysqli,$insertbarangfirst);
                                
                    if($resultinsertbarangfirst)
                    {
                        echo "<script type='text/javascript'>alert('Barang Di Tambah'); window.location = 'entribarang.php';</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('TETOTTTTTTTT'); window.location = 'entribarang.php';</script>";
                    }   
                }
                    else
                    {   
                            if($namabarang === $rowbarang['nama_barang'] && $satuanbarang === $rowbarang['satuan'])
                                {
                                    $tambahstok = (int)$jumlahbarang + $rowbarang['stok'];

                                    $updatebarang = "UPDATE barang SET stok = '$tambahstok' WHERE nama_barang = '$namabarang' AND satuan = '$satuanbarang'";
                                    $resultupdatebarang = mysqli_query($mysqli,$updatebarang);

                                    if($resultupdatebarang)
                                    {
                                        echo "<script type='text/javascript'>alert('Stok Di Tambah'); window.location = 'entribarang.php';</script>";
                                        $updatestatusbarang = "UPDATE request_barang SET status_request = 'Done' WHERE id_request= '$id_request'";
                                        $resultupdatestatusbarang = mysqli_query($mysqli,$updatestatusbarang);
                                    }
                                    else
                                    {
                                        echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'entribarang.php';</script>";
                                    }
                                }
                                    else
                                    {
                                        $barang_id = $rowbarang;
                                        $barang_id = (int)substr ($barang_id['id_barang'], 1,);
                                        $barang_id++;
                                        $firstbarangid = 'B' . str_pad($barang_id, 4, "0", STR_PAD_LEFT);
                                    
                                        $insertbarang = "INSERT INTO barang VALUES('$firstbarangid','$namabarang','$jumlahbarang','$satuanbarang')";
                                        $resultinsertbarang = mysqli_query($mysqli,$insertbarang);
                                    
                                            if($resultinsertbarang)
                                            {
                                                echo "<script type='text/javascript'>alert('Barang Di Tambah'); window.location = 'entribarang.php';</script>";
                                                $updatestatusbarang = "UPDATE request_barang SET status_request = 'Done' WHERE id_request= '$id_request'";
                                                $resultupdatestatusbarang = mysqli_query($mysqli,$updatestatusbarang);
                                            }
                                            else
                                            {
                                                echo "<script type='text/javascript'>alert('Terjadi Kesalahan'); window.location = 'entribarang.php';</script>";
                                            }   
                                     }                                           
                        }
        } 

?>