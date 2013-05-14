<?php
/*
Template Name: Iframe-model
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">  
		<title>MW2015 Widget</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/widget.css">
	</head>
	<body>
		<p id="base_directory" style="display:none"><?php echo  bloginfo('stylesheet_directory'); ?></p>
		
		
			<a href="http://myworld2015.org"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="" class="widget_logo" ></a>
			<br>
			<header class="vote-header-wrap" style="margin-bottom: 0;">
			<p id="vote-header"> </p>
			</header>


			<div class="accordion vote-form"></div>

			<div class="suggest-priority">
				<h4><span  class="box  plus-sign"></span><a id="priority-item-title" href="#"></a></h4>
					<article id="priority-item-content-wrap" style="display:none">
						<textarea id="priority-item-content" placeholder=""></textarea>
					</article>
			</div>

			<div>
				<section class="row dropdowns-wrap">
						<section class="dropdowns-wrap-inner">
							<p id="dropdowns-title">Lastly, please tell us a little about yourself.</p>

							<p id="dropdowns-content">Your votes will remain anonymous, but this basic data will help us understand you better.</p>

							<section id="dropdown-area" class="row" style="margin-bottom: 20px">
								<label for="gender-dropdown" id="dropdowns-gender-label" class="hidden-mobile">I am</label>
								<select name="gender-dropdown" id="gender-dropdown" class="gender-dropdown"><option value="">gender</option><option value="1">Male</option><option value="2">Female</option></select>

								<label for="age-dropdown" id="dropdowns-age-label" class="hidden-mobile">, aged</label>
								<select name="age-dropdown" id="age-dropdown" class="age-dropdown"><option value="">age</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104">104</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110">110</option><option value="111">111</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="117">117</option><option value="118">118</option><option value="119">119</option><option value="120">120</option><option value="121">121</option><option value="122">122</option><option value="123">123</option><option value="124">124</option><option value="125">125</option><option value="126">126</option><option value="127">127</option><option value="128">128</option><option value="129">129</option><option value="130">130</option><option value="131">131</option><option value="132">132</option><option value="133">133</option><option value="134">134</option><option value="135">135</option><option value="136">136</option><option value="137">137</option><option value="138">138</option><option value="139">139</option><option value="140">140</option></select>

								<label for="countries-dropdown" id="dropdowns-country-label" class="hidden-mobile">, and live in</label>
								<select name="countries-dropdown" id="countries-dropdown" class="countries-dropdown"><option value="">country</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">Andorra</option><option value="5">Angola</option><option value="6">Antigua and Barbuda</option><option value="7">Argentina</option><option value="8">Armenia</option><option value="9">Australia</option><option value="10">Austria</option><option value="11">Azerbaijan</option><option value="12">Bahamas</option><option value="13">Bahrain</option><option value="14">Bangladesh</option><option value="15">Barbados</option><option value="16">Belarus</option><option value="17">Belgium</option><option value="18">Belize</option><option value="19">Benin</option><option value="20">Bhutan</option><option value="21">Bolivia (Plurinational State of)</option><option value="22">Bosnia and Herzegovina</option><option value="23">Botswana</option><option value="24">Brazil</option><option value="25">Brunei Darussalam</option><option value="26">Bulgaria</option><option value="27">Burkina Faso</option><option value="28">Burundi</option><option value="29">Cambodia</option><option value="30">Cameroon</option><option value="31">Canada</option><option value="32">Cape Verde</option><option value="33">Central African Republic</option><option value="34">Chad</option><option value="35">Chile</option><option value="36">China</option><option value="37">Colombia</option><option value="38">Comoros</option><option value="39">Congo</option><option value="40">Costa Rica</option><option value="41">Cote d'Ivoire</option><option value="42">Croatia</option><option value="43">Cuba</option><option value="44">Cyprus</option><option value="45">Czech Republic</option><option value="46">Democratic People's Republic of Korea</option><option value="47">Democratic Republic of the Congo</option><option value="48">Denmark</option><option value="49">Djibouti</option><option value="50">Dominica</option><option value="51">Dominican Republic</option><option value="52">Ecuador</option><option value="53">Egypt</option><option value="54">El Salvador</option><option value="55">Equatorial Guinea</option><option value="56">Eritrea</option><option value="57">Estonia</option><option value="58">Ethiopia</option><option value="59">Fiji</option><option value="60">Finland</option><option value="61">France</option><option value="62">Gabon</option><option value="63">Gambia</option><option value="64">Georgia</option><option value="65">Germany</option><option value="66">Ghana</option><option value="67">Greece</option><option value="68">Grenada</option><option value="69">Guatemala</option><option value="70">Guinea</option><option value="71">Guinea-Bissau</option><option value="72">Guyana</option><option value="73">Haiti</option><option value="74">Honduras</option><option value="75">Hungary</option><option value="76">Iceland</option><option value="77">India</option><option value="78">Indonesia</option><option value="79">Iran (Islamic Republic of)</option><option value="80">Iraq</option><option value="81">Ireland</option><option value="82">Israel</option><option value="83">Italy</option><option value="84">Jamaica</option><option value="85">Japan</option><option value="86">Jordan</option><option value="87">Kazakhstan</option><option value="88">Kenya</option><option value="89">Kiribati</option><option value="90">Kuwait</option><option value="91">Kyrgyzstan</option><option value="92">Lao People's Democratic Republic</option><option value="93">Latvia</option><option value="94">Lebanon</option><option value="95">Lesotho</option><option value="96">Liberia</option><option value="97">Libya</option><option value="98">Liechtenstein</option><option value="99">Lithuania</option><option value="100">Luxembourg</option><option value="101">Madagascar</option><option value="102">Malawi</option><option value="103">Malaysia</option><option value="104">Maldives</option><option value="105">Mali</option><option value="106">Malta</option><option value="107">Marshall Islands</option><option value="108">Mauritania</option><option value="109">Mauritius</option><option value="110">Mexico</option><option value="111">Micronesia (Federated States of)</option><option value="112">Monaco</option><option value="113">Mongolia</option><option value="114">Montenegro</option><option value="115">Morocco</option><option value="116">Mozambique</option><option value="117">Myanmar</option><option value="118">Namibia</option><option value="119">Nauru</option><option value="120">Nepal</option><option value="121">Netherlands</option><option value="122">New Zealand</option><option value="123">Nicaragua</option><option value="124">Niger</option><option value="125">Nigeria</option><option value="126">Norway</option><option value="127">Oman</option><option value="128">Pakistan</option><option value="194">Palestine (State of)</option><option value="129">Palau</option><option value="130">Panama</option><option value="131">Papua New Guinea</option><option value="132">Paraguay</option><option value="133">Peru</option><option value="134">Philippines</option><option value="135">Poland</option><option value="136">Portugal</option><option value="137">Qatar</option><option value="138">Republic of Korea</option><option value="139">Republic of Moldova</option><option value="140">Romania</option><option value="141">Russian Federation</option><option value="142">Rwanda</option><option value="143">Saint Kitts and Nevis</option><option value="144">Saint Lucia</option><option value="145">Saint Vincent and the Grenadines</option><option value="146">Samoa</option><option value="147">San Marino</option><option value="148">Sao Tome and Principe</option><option value="149">Saudi Arabia</option><option value="150">Senegal</option><option value="151">Serbia</option><option value="152">Seychelles</option><option value="153">Sierra Leone</option><option value="154">Singapore</option><option value="155">Slovakia</option><option value="156">Slovenia</option><option value="157">Solomon Islands</option><option value="158">Somalia</option><option value="159">South Africa</option><option value="160">South Sudan</option><option value="161">Spain</option><option value="162">Sri Lanka</option><option value="163">Sudan</option><option value="164">Suriname</option><option value="165">Swaziland</option><option value="166">Sweden</option><option value="167">Switzerland</option><option value="168">Syrian Arab Republic</option><option value="169">Tajikistan</option><option value="170">Thailand</option><option value="171">The former Yugoslav Republic of Macedonia</option><option value="172">Timor-Leste</option><option value="173">Togo</option><option value="174">Tonga</option><option value="175">Trinidad and Tobago</option><option value="176">Tunisia</option><option value="177">Turkey</option><option value="178">Turkmenistan</option><option value="179">Tuvalu</option><option value="180">Uganda</option><option value="181">Ukraine</option><option value="182">United Arab Emirates</option><option value="183">United Kingdom of Great Britain and Northern Ireland</option><option value="184">United Republic of Tanzania</option><option value="185">United States of America</option><option value="186">Uruguay</option><option value="187">Uzbekistan</option><option value="188">Vanuatu</option><option value="189">Venezuela (Bolivarian Republic of)</option><option value="190">Viet Nam</option><option value="191">Yemen</option><option value="192">Zambia</option><option value="193">Zimbabwe</option></select>

								<label for="education-dropdown" id="dropdowns-education-label" class="hidden-mobile">My education level is</label>
								<select name="education-dropdown" id="education-dropdown" class="education-dropdown"><option value="">education</option><option value="1">Some primary</option><option value="2">Finished primary</option><option value="3">Finished secondary</option><option value="4">Beyond secondary</option></select>
							</section>

							<p id="dropdowns-oath" class="clearfix">By ﬁlling this out, I pledge that this is my single vote in the MY World global survey. <br> I will not vote more than once. </p>

							<section class="row submit-btn-wrap" style="margin-bottom: 0">
								<span style="width: 262px; height: 50px; display: block; position: relative; margin: 0 auto">
									<input type="button" value="" name="submit-btn" id="submit-btn" style="background-image: url(&quot;assets/img/vote.png&quot;); background-position: 0px 0px;">
								</span>
							</section>

							<section style="height: 60px;">
								<p class="validation-message clearfix" id="validation-message" style="display: none;">Choose 6 priorities and please provide your gender, age, country and education level before voting.</p>
							</section>
						</section>
					</section>
			</div>

		





			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/easyXDM.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/MW.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/accordion.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/widget.js"></script>
			
    </body>
</html>