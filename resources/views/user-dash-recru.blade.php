@extends('layouts.navbarindex')
@extends('layouts.headerindex')
@section('content4')
@section('content5')
<div class="jobsearch-main-content">
            <div class="jobsearch-plugin-default-container">
                <div class="user-dashboard-loader" style="display: none;"></div>
                <div class="jobsearch-row">
                    <aside class="jobsearch-column-3 jobsearch-typo-wrap">
                        <div class="jobsearch-typo-wrap">
                            <div class="jobsearch-employer-dashboard-nav">
                                <figure> <a href="javascript:void(0);" class="user-dashthumb-remove jobsearch-tooltipcon" title="Supprimer" data-uid="182340" style="display: none;"><i class="fa fa-times"></i></a> <a id="com-img-holder" href="https://marocemploi.net/user-dashboard/"
                                        class="employer-dashboard-thumb"> <img src="https://secure.gravatar.com/avatar/d01d152e78a12c57fe8190f26087fb8f?s=132&d=mm&r=g" alt="" style="max-width: 132px;"> </a>
                                    <figcaption> <span class="fileUpLoader"></span>
                                        <div class="jobsearch-fileUpload"> <span><i class="jobsearch-icon jobsearch-add"></i> Télécharger la photo</span> <input type="file" id="user_avatar" name="user_avatar" class="jobsearch-upload"></div>
                                        <h2><a href="/profilerecruteur">recruteur.technalab</a></h2> <span class="jobsearch-dashboard-subtitle"></span></figcaption>
                                </figure>
                                <ul>
                                    
                                    <li class="active"> <a href="/profilerecruteur"> <i class="jobsearch-icon jobsearch-user"></i> Mon profil(modifier) </a></li>
                                    
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-briefcase-1"></i>offres publiées</a></li>
                                    <li> <a href="/post-jobs"> <i class="jobsearch-icon jobsearch-briefcase-1"></i>postuler une offres</a></li>
    
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-heart"></i> Favorite condidats </a></li>
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-multimedia"></i> Modifier le mot de passe </a></li>
                                    <li> <a href=""> <i class="jobsearch-icon jobsearch-alarm"></i> les condidats postulées leur cv à une offre </a></li>
                  
                                    <li class="profile-del-btnlink">
                                    <a class="jobsearch-userdel-profilebtn"><i class="fa fa-trash-o"></i>Déconnexion </a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="jobsearch-column-9 jobsearch-typo-wrap">
                        <div id="dashboard-tab-settings" class="main-tab-section">
                            <div class="jobsearch-typo-wrap">
                                <form id="candidate-profilesetings-form" class="jobsearch-employer-dasboard" method="post" action="https://marocemploi.net/user-dashboard/?tab=dashboard-settings" enctype="multipart/form-data">
                                    <div class="jobsearch-employer-box-section">
                                        <div class="jobsearch-profile-title">
                                            <h2>Informations de base</h2>
                                        </div>
                                        <div class="jobsearch-employer-cvr-img">
                                            <figure>
                                                <div class="img-cont-sec" style="display: none;"> <a href="javascript:void(0);" class="candidate-remove-coverimg"><i class="fa fa-times"></i> Supprimer la couverture</a> <a id="com-cvrimg-holder" class="employer-dashboard-cvr"> <span style="background:url() no-repeat center/cover;"></span> </a></div>
                                                <figcaption>
                                                <span class="file-loader"></span>
                                                    <div class="jobsearch-fileUpload"> <span><i class="jobsearch-icon jobsearch-add"></i> Télécharger une photo de couverture</span> <input type="file" id="user_cvr_photo_cand" name="user_cvr_photo_cand" class="jobsearch-upload"></div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <ul class="jobsearch-row jobsearch-employer-profile-form">
                                            <li class="jobsearch-column-6"> <label>Full Name *</label> <input type="text" name="display_name" value="mansri.sihem" /></li>
                                            <li class="jobsearch-column-6"> <label>Email</label> <input value="mansrisihem@gmail.com" type="text" readonly="readonly"></li>
                                            <li class="jobsearch-column-12"> <label>URL de profil</label>
                                                <div class="jobsearch-userprofile-url"> <span>https://recrutass.net/recruteur/</span><strong>mansri-sihem</strong> <input type="text" class="profile-slug-field" style="display: none;" name="user_profile_slug" value="mansri-sihem"> <a href="javascript:void(0);"
                                                        class="updte-profile-slugbtn">Modifier</a> <a href="javascript:void(0);" class="ok-profile-slugbtn" style="display: none;">Ok</a> <span class="slugchng-loder"></span></div>
                                            </li>
                                            <li class="jobsearch-column-6"> <label>genre</label>
                                                <div class="jobsearch-profile-select"> <select name="jobsearch_field_user_public_pview" class="selectize-select" placeholder="Profile for Public View"><option  value="yes">mr</option><option  value="no">melle</option> </select></div>
                                            </li>
                                            <li class="jobsearch-column-6"> <label>Date de Naissance:</label>
                                                <div class="jobsearch-three-column-row">
                                                    <div class="jobsearch-profile-select jobsearch-three-column"> <select name="user_dob_dd" class="selectize-select" placeholder="Jour"><option  value="1">1</option><option  value="2">2</option><option  value="3">3</option><option  value="4">4</option><option  value="5">5</option><option  value="6">6</option><option  value="7">7</option><option  value="8">8</option><option  value="9">9</option><option  value="10">10</option><option  value="11">11</option><option  value="12">12</option><option  value="13">13</option><option  value="14">14</option><option  value="15">15</option><option  value="16">16</option><option  value="17">17</option><option  value="18">18</option><option  value="19">19</option><option  value="20">20</option><option  value="21">21</option><option  value="22">22</option><option  value="23">23</option><option  value="24">24</option><option  value="25">25</option><option  value="26">26</option><option  value="27">27</option><option  value="28">28</option><option selected="selected" value="29">29</option><option  value="30">30</option><option  value="31">31</option> </select></div>
                                                    <div
                                                        class="jobsearch-profile-select jobsearch-three-column"> <select name="user_dob_mm" class="selectize-select" placeholder="Mois"><option  value="1">1</option><option  value="2">2</option><option  value="3">3</option><option  value="4">4</option><option  value="5">5</option><option  value="6">6</option><option  value="7">7</option><option  value="8">8</option><option  value="9">9</option><option  value="10">10</option><option selected="selected" value="11">11</option><option  value="12">12</option> </select></div>
                                                <div
                                                    class="jobsearch-profile-select jobsearch-three-column"> <select name="user_dob_yy" class="selectize-select" placeholder="Année"><option  value="1900">1900</option><option  value="1901">1901</option><option  value="1902">1902</option><option  value="1903">1903</option><option  value="1904">1904</option><option  value="1905">1905</option><option  value="1906">1906</option><option  value="1907">1907</option><option  value="1908">1908</option><option  value="1909">1909</option><option  value="1910">1910</option><option  value="1911">1911</option><option  value="1912">1912</option><option  value="1913">1913</option><option  value="1914">1914</option><option  value="1915">1915</option><option  value="1916">1916</option><option  value="1917">1917</option><option  value="1918">1918</option><option  value="1919">1919</option><option  value="1920">1920</option><option  value="1921">1921</option><option  value="1922">1922</option><option  value="1923">1923</option><option  value="1924">1924</option><option  value="1925">1925</option><option  value="1926">1926</option><option  value="1927">1927</option><option  value="1928">1928</option><option  value="1929">1929</option><option  value="1930">1930</option><option  value="1931">1931</option><option  value="1932">1932</option><option  value="1933">1933</option><option  value="1934">1934</option><option  value="1935">1935</option><option  value="1936">1936</option><option  value="1937">1937</option><option  value="1938">1938</option><option  value="1939">1939</option><option  value="1940">1940</option><option  value="1941">1941</option><option  value="1942">1942</option><option  value="1943">1943</option><option  value="1944">1944</option><option  value="1945">1945</option><option  value="1946">1946</option><option  value="1947">1947</option><option  value="1948">1948</option><option  value="1949">1949</option><option  value="1950">1950</option><option  value="1951">1951</option><option  value="1952">1952</option><option  value="1953">1953</option><option  value="1954">1954</option><option  value="1955">1955</option><option  value="1956">1956</option><option  value="1957">1957</option><option  value="1958">1958</option><option  value="1959">1959</option><option  value="1960">1960</option><option  value="1961">1961</option><option  value="1962">1962</option><option  value="1963">1963</option><option  value="1964">1964</option><option  value="1965">1965</option><option  value="1966">1966</option><option  value="1967">1967</option><option  value="1968">1968</option><option  value="1969">1969</option><option  value="1970">1970</option><option  value="1971">1971</option><option  value="1972">1972</option><option  value="1973">1973</option><option  value="1974">1974</option><option  value="1975">1975</option><option  value="1976">1976</option><option  value="1977">1977</option><option  value="1978">1978</option><option  value="1979">1979</option><option  value="1980">1980</option><option  value="1981">1981</option><option  value="1982">1982</option><option  value="1983">1983</option><option  value="1984">1984</option><option  value="1985">1985</option><option  value="1986">1986</option><option  value="1987">1987</option><option  value="1988">1988</option><option  value="1989">1989</option><option  value="1990">1990</option><option  value="1991">1991</option><option  value="1992">1992</option><option  value="1993">1993</option><option  value="1994">1994</option><option  value="1995">1995</option><option  value="1996">1996</option><option  value="1997">1997</option><option  value="1998">1998</option><option  value="1999">1999</option><option  value="2000">2000</option><option  value="2001">2001</option><option  value="2002">2002</option><option  value="2003">2003</option><option  value="2004">2004</option><option  value="2005">2005</option><option  value="2006">2006</option><option  value="2007">2007</option><option  value="2008">2008</option><option  value="2009">2009</option><option  value="2010">2010</option><option  value="2011">2011</option><option  value="2012">2012</option><option  value="2013">2013</option><option  value="2014">2014</option><option  value="2015">2015</option><option  value="2016">2016</option><option  value="2017">2017</option><option  value="2018">2018</option><option selected="selected" value="2019">2019</option> </select></div>
                            </div>
                            </li>
                            <li class="jobsearch-column-6"> <label>Téléphone</label> <input value="0558654416" onkeyup="javascript:jobsearch_is_valid_phone_number(this)" type="tel" name="user_phone"></li>
                            <li class="jobsearch-column-6"> <label>Secteur</label>
                                <div class="jobsearch-profile-select"> <select name='user_sector' id='user-sector' class='postform selectize-select'><option value='0'>Secteur</option><option class="level-0" value="468">Agriculture / pêche / forêts</option><option class="level-0" value="469">Alimentation</option><option class="level-0" value="470">Apprentissage / stage</option><option class="level-0" value="471">Art / audiovisuel</option><option class="level-0" value="472">Artisanat</option><option class="level-0" value="473">Automobile</option><option class="level-0" value="497">Autres</option><option class="level-0" value="474">Beauté / bien-être</option><option class="level-0" value="476">Centres d&#8217;appel / Help Desk / Call center</option><option class="level-0" value="477">Coiffure</option><option class="level-0" value="478">Commerces / distribution</option><option class="level-0" value="479">Comptabilité / juridique</option><option class="level-0" value="480">Construction</option><option class="level-0" value="481">Direction</option><option class="level-0" value="482">Enseignement</option><option class="level-0" value="483">Finance / assurances / immobilier</option><option class="level-0" value="484">Fonction publique</option><option class="level-0" value="1244">Formations</option><option class="level-0" value="485">Hôtellerie / restauration</option><option class="level-0" value="486">Industrie</option><option class="level-0" value="487" selected="selected">Informatique / télécoms</option><option class="level-0" value="488">Internet / hi-tech</option><option class="level-0" value="489">Marketing / vente</option><option class="level-0" value="490">Presse / médias</option><option class="level-0" value="491">Santé / médical / social</option><option class="level-0" value="492">Secrétariat / administration</option><option class="level-0" value="493">Services</option><option class="level-0" value="494">Textile</option><option class="level-0" value="495">Tourisme</option><option class="level-0" value="496">Transports / logistique</option> </select></div>
                            </li>
                           
                            
                            </ul>
                        </div>
                        <div class="jobsearch-employer-box-section">
                            <div class="jobsearch-profile-title">
                                <h2>Réseaux sociaux</h2>
                            </div>
                            <ul class="jobsearch-row jobsearch-employer-profile-form">
                                <li class="jobsearch-column-6"> <label>Facebook</label> <input value="" name="jobsearch_field_user_facebook_url" type="text"></li>
                                <li class="jobsearch-column-6"> <label>Twitter</label> <input value="" name="jobsearch_field_user_twitter_url" type="text"></li>
                                <li class="jobsearch-column-6"> <label>Linkedin</label> <input value="" name="jobsearch_field_user_linkedin_url" type="text"></li>
                                <li class="jobsearch-column-6"> <label>Dribbble</label> <input value="" name="jobsearch_field_user_dribbble_url" type="text"></li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                            var jobsearch_sloc_country = '';
                            var jobsearch_sloc_state = '';
                            var jobsearch_sloc_city = '';
                            var jobsearch_is_admin = '';
                        </script>
                        <div class="jobsearch-employer-box-section">
                            <div class="jobsearch-profile-title">
                                <h2>Adresse / Lieu</h2>
                            </div>
                            <ul class="jobsearch-row jobsearch-employer-profile-form">
                                <li class="jobsearch-column-6"> <label>Pays*</label>
                                    <div id="jobsearch-gdapilocs-contrycon" data-val="" class="jobsearch-profile-select"> <select name="jobsearch_field_location_location1" class="countries" id="countryId"><option value="">Sélectionnez un pays</option> </select></div>
                                </li>
                                   <div id="jobsearch-gdapilocs-statecon" data-val="" class="jobsearch-profile-select"> <select name="jobsearch_field_location_location2" class="states" id="stateId"><option value="">Sélectionnez un département</option> </select></div>
                                </li>   <li class="jobsearch-column-6"> <label>État*</label>
                              
                                <li class="jobsearch-column-6"> <label>Ville*</label>
                                    <div id="jobsearch-gdapilocs-citycon" data-val="" class="jobsearch-profile-select"> <select name="jobsearch_field_location_location3" class="cities order-alpha" id="cityId"><option value="">Sélectionnez une ville</option> </select></div>
                                </li>
                                <li class="jobsearch-column-12"> <label>Adresse complète de l'entreprise</label> <input type="text" id="jobsearch_location_address_41574973" name="jobsearch_field_location_address" class="" placeholder="Enter a location" value=""> <input id="check_loc_addr_41574973" type="hidden"
                                        value=""></li>
                                <li class="jobsearch-column-2" style="display: none;"> <button id="jobsearch-findmap-41574973" class="jobsearch-findmap-btn">Trouver sur la carte</button></li>
                                <li class="jobsearch-column-4 dash-maploc-latfield" style="display: none;"> <label>Latitude</label> <input type="text" id="jobsearch_location_lat_41574973" name="jobsearch_field_location_lat" value="37.090240" /></li>
                                <li class="jobsearch-column-4 dash-maploc-lngfield" style="display: none;"> <label>Longitude</label> <input type="text" id="jobsearch_location_lng_41574973" name="jobsearch_field_location_lng" value="-95.712891" /></li>
                                <li class="jobsearch-column-4 dash-maploc-zoomfield" style="display: none;">
                                <label>Zoom</label> <input type="text" id="jobsearch_location_zoom_41574973" name="jobsearch_field_location_zoom" value="12" /></li>
                                <li class="jobsearch-column-12" style="display: none;">
                                    <div class="jobsearch-profile-map">
                                        <div id="jobsearch-map-41574973" style="width: 100%; height: 0px;"></div>
                                    </div> <span class="jobsearch-short-message" style="display: none;">Pour une localisation plus précise, vous pouvez saisir et bouger le repère avec votre souris.</span></li>
                            </ul>
                        </div>
                     
                        <div class="terms-priv-chek-con">
                            <p><input type="checkbox" name="terms_cond_check" checked>Vous acceptez nos conditions d'utilisation et notre politique de confidentialité</p>
                        </div>
                        <input type="hidden" name="user_settings_form" value="1"> <input type="submit" class="jobsearch-employer-profile-submit" value="Enregistrer les paramètres"></form>
                    </div>
                </div>
              
            </div>
        </div>
        @endsection
@endsection