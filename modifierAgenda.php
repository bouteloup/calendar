<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier Bouteloup.R</title>
    </head>

    <body>
      <br></br><h2> Ajouter un évènement </h2> <br></br>




      <FORM method=post action="addDataBase.php">

        <table>
          <tbody>

          <tr class="colorBackgroundFormEvent">
            <td> Titre de l'évènement </td>
            <td> <input type="text" name="titre" style="border:solid 1px grey"> </td>
          </tr>

          <tr class="colorBackgroundFormEvent">
            <td> Commentaires </td>
              <td>
                <input type="text" name="commentaire" style="border:solid 1px grey"> </td>
              </td>
            </tr>

            <tr class="colorBackgroundFormEvent">
              <td> Lieu </td>
                <td>
                  <input type="text" name="lieu" style="border:solid 1px grey"> </td>
                </td>
              </tr>

              <tr class="colorBackgroundFormEvent">
                <td> Horaire </td>
                  <td>
                  <SELECT name="horaire" style="border:solid 1px grey">
                    <OPTION VALUE="8h00">8h00</OPTION>
                    <OPTION VALUE="9h00">9h00</OPTION>
                    <OPTION VALUE="10h00">10h00</OPTION>
                    <OPTION VALUE="11h00">11h00</OPTION>
                    <OPTION VALUE="12h00">12h00</OPTION>
                    <OPTION VALUE="13h00">13h00</OPTION>
                    <OPTION VALUE="14h00">14h00</OPTION>
                    <OPTION VALUE="15h00">15h00</OPTION>
                    <OPTION VALUE="16h00">16h00</OPTION>
                    <OPTION VALUE="17h00">17h00</OPTION>
                    <OPTION VALUE="18h00">18h00</OPTION>
                    <OPTION VALUE="19h00">19h00</OPTION>
                    <OPTION VALUE="20h00">20h00</OPTION>
                    <OPTION VALUE="21h00">21h00</OPTION>
                    <OPTION VALUE="22h00">22h00</OPTION>
                    <OPTION VALUE="23h00">23h00</OPTION>
                    <OPTION VALUE="00h00">00h00</OPTION>
                  </td>
                </tr>

                <tr class="colorBackgroundFormEvent">
                  <td> Date (J/M/A) </td>
                    <td>
                      <SELECT name="date" style="border:solid 1px grey">
                        <OPTION VALUE="1">1</OPTION>
                        <OPTION VALUE="2">2</OPTION>
                        <OPTION VALUE="3">3</OPTION>
                        <OPTION VALUE="4">4</OPTION>
                        <OPTION VALUE="5">5</OPTION>
                        <OPTION VALUE="6">6</OPTION>
                        <OPTION VALUE="7">7</OPTION>
                        <OPTION VALUE="8">8</OPTION>
                        <OPTION VALUE="9">9</OPTION>
                        <OPTION VALUE="10">10</OPTION>
                        <OPTION VALUE="11">11</OPTION>
                        <OPTION VALUE="12">12</OPTION>
                        <OPTION VALUE="13">13</OPTION>
                        <OPTION VALUE="14">14</OPTION>
                        <OPTION VALUE="15">15</OPTION>
                        <OPTION VALUE="16">16</OPTION>
                        <OPTION VALUE="17">17</OPTION>
                        <OPTION VALUE="18">18</OPTION>
                        <OPTION VALUE="19">19</OPTION>
                        <OPTION VALUE="20">20</OPTION>
                        <OPTION VALUE="21">21</OPTION>
                        <OPTION VALUE="22">22</OPTION>
                        <OPTION VALUE="23">23</OPTION>
                        <OPTION VALUE="24">24</OPTION>
                        <OPTION VALUE="25">25</OPTION>
                        <OPTION VALUE="26">26</OPTION>
                        <OPTION VALUE="27">27</OPTION>
                        <OPTION VALUE="28">28</OPTION>
                        <OPTION VALUE="29">29</OPTION>
                        <OPTION VALUE="30">30</OPTION>
                        <OPTION VALUE="31">31</OPTION>
                    </td>
                  </tr>
          </tbody>
        </table>
      </FORM>


    </body>
</html>
