<?php
    require_once __DIR__.'/../model/resevation.php';
    require_once __DIR__.'/../model/salle.php';
    require_once __DIR__.'/../model/groupe.php';
   

session_start();
class Reservation
{
	
	function index()
	{  
		 $salle=new salleModel;
		 $salles=$salle->select();
		
         $groupe=new GroupeModel;
		 $groupes=$groupe->select(); 
         
         $cour=new modelReservation;
         $cours= $cour->afficher();
    
		if (isset($_SESSION['Enseignant'])){
		require_once __DIR__.'/../view/enseignant/reservation.php';
		}else {
		require_once __DIR__.'/../view/login.php';
		}
    }
    function reserver() 
    {
        $reserver= new modelReservation;
        
        if (isset($_POST['salle']) && isset($_POST['groupe']) && isset($_POST['date']) && isset($_POST['time']) && !empty($_POST['salle']) && !empty($_POST['groupe']) && !empty($_POST['date']) && !empty($_POST['time'])) {
            
            $user=$_SESSION['Enseignant'];
            $salle=$_POST['salle'];
            $groupe=$_POST['groupe'];
            $date=$_POST['date'];
            $time=$_POST['time'];
            $today=date('y-m-d');
            if($date>=$today){
                $cap= new GroupeModel;
                $cap= $cap->selectID($id);
                $effec= new SalleModel;
                $effec=$effec->selectID($id);

                if($cap>=$effec){
                    $reserver->reserver($salle,$groupe,$date,$time,$user);
                    header('location:http://localhost/mvcBrief5/reservation/');

                }

                else {
                    echo "<script>
                    alert('la salle ne support pas l'effectif !')
                    </script>";

                }

               
                
                

            }
            else {
            $this->index();
            echo "<script>
            alert('veuillez saisir une date valide !')
            </script>";
            }

              

        }else
        {
            $this->index();
            echo "<script>
            alert('veuillez remplir les champs !')
            </script>";
        }
            
        }
    
     


    function delete()
        {
        
            $id=$_POST['id'];
            $delete= new modelReservation;
            $delete1=$delete->delete($id);
            header('location:http://localhost/mvcBrief5/reservation/');

        }


    function singOut()
    {
        session_unset();
        session_destroy();
        header('location:http://localhost/mvcBrief5/login/');


    }    

    }

    