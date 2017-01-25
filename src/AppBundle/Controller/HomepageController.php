<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 1/3/17
 * Time: 5:22 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends Controller
{
    /**
     * @Route("/{pageName}")
     */
    public function showPage( $pageName )
    {

        $demographic_questions = array(
            array(
              "name" => "Bard e-mail",
              "id" => "email_id",
              "type" => "text",
              "sample" => "xy1234",
              "help" => "The part of your email before '@bard.edu'"
            ),
            array(
                "name" => "Age",
                "id" => "age",
                "type" => "number",
                "sample" => "20",
            ),
            array(
                "name" => "Group",
                "id" => "group",
                "type" => "text",
                "sample" => "21",
                "help" => "Group to join and compare with, e.g. Citsci Section, Tewksbury, etc."
            ),
        );

        $surnames = array("Algazi", "Alvarez", "Alpern", "Ametrano", "Andrews", "Aran", "Arnstein", "Ashford", "Bailey Ballout", "Bamberger", "Baptista", "Barr", "Barrows", "Baskerville", "Bassiri", "Bell", "Bokgese", "Brandao", "Bravo", "Brooke", "Brightman", "Billy", "Blau", "Bohen", "Bohn", "Borsuk", "Brendle", "Butler", "Calle", "Cantwell", "Carrell", "Chinlund", "Cirker", "Cohen", "Collas", "Couch", "Callegher", "Calcaterra", "Cook", "Carey", "Cassell", "Chen", "Chung", "Clarke", "Cohn", "Carton", "Crowley", "Curbelo", "Dellamanna", "Diaz", "Dirar", "Duncan", "Dagostino", "Delakas", "Dillon", "Donaghey", "Daly", "Dawson", "Edery", "Ellis", "Elliott", "Eastman", "Easton", "Famous", "Fermin", "Fialco", "Finklestein", "Farber", "Falkin", "Feinman", "Friedman", "Gardner", "Gelpi", "Glascock", "Grandfield", "Greenbaum Greenwood", "Gruber", "Garil", "Goff", "Gladwell", "Greenup", "Gannon", "Ganshaw", "Garcia", "Gennis", "Gerard", "Gericke", "Gilbert", "Glassman", "Glazer", "Gomendio", "Gonzalez", "Greenstein", "Guglielmo", "Gurman", "Haberkorn", "Hoskins", "Hussein", "Hamm", "Hardwick", "Harrell", "Hauptman", "Hawkins", "Henderson", "Hayman", "Hibara", "Hehmann", "Herbst", "Hedges", "Hogan", "Hoffman", "Horowitz", "Hsu", "Huber", "Ikiz", "Jaroschy", "Johann", "Jacobs", "Jara", "Johnson", "Kassel", "Keegan", "Kuroda", "Kavanau", "Keller", "Kevill", "Kiew", "Kimbrough", "Kline", "Kossoff", "Kotzitzky", "Kahn", "Kiesler", "Kosser", "Korte", "Leibowitz", "Lin", "Liu", "Lowrance", "Lundh", "Laux", "Leifer", "Leung", "Levine", "Leiw", "Lockwood", "Logrono", "Lohnes", "Lowet", "Laber", "Leonardi", "Marten", "McLean", "Michaels", "Miranda", "Moy", "Marin", "Muir", "Murphy", "Marodon", "Matos", "Mendoza", "Muraki", "Neck", "Needham", "Noboa", "Null", "O’Flynn", "O’Neill", "Orlowski", "Perkins", "Pieper", "Pierre", "Pons", "Pruska", "Paulino", "Popper", "Potter", "Purpura", "Palma", "Perez", "Portocarrero", "Punwasi", "Rader", "Rankin", "Ray", "Reyes", "Richardson", "Ritter", "Roos", "Rose", "Rosenfeld", "Roth", "Rutherford", "Rustin", "Ramos", "Regan", "Reisman", "Renkert", "Roberts", "Rowan", "Rene", "Rosario", "Rothbart", "Saperstein", "Schoenbrod", "Schwed", "Sears", "Statosky", "Sutphen", "Sheehy", "Silverton", "Silverman", "Silverstein", "Sklar", "Slotkin", "Speros", "Stollman", "Sadowski", "Schles", "Shapiro", "Sigdel", "Snow", "Spencer", "Steinkol", "Stewart", "Stires", "Stopnik", "Stonehill", "Tayss", "Tilney", "Temple", "Torfield", "Townsend", "Trimpin", "Turchin", "Villa", "Vasillov", "Voda", "Waring", "Weber", "Weinstein", "Wang", "Wegimont", "Weed", "Weishaus");
        $templating = $this->container->get('templating');

        if($pageName == "eval") {
            $output = $templating->render('index.html.twig', [
                'demographic_questions' => $demographic_questions,
                'surnames' => $surnames
            ]);
        } elseif($pageName == "results") {
            $output = $templating->render('results.html.twig', [

            ]);
        }


        return new Response($output);
    }
}