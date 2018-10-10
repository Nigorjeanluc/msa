@extends('layouts.weblayout')

@section('title', 'ITRI')

@section('headSection')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div style="font-size: 3.5em" class="gazette-post-tag">
                                <a href="#">ITRI</a>
                            </div>
                            {{--  <h2 class="font-pt">Active in Rwanda</h2>
                            <p>To sustainably supply raw materials of the highest quality, we use the latest technologies and production methods.</p>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
            <div class="row">
                {{-- <div class="col-12 col-md-3">
                    <div>
                        <h4 class="font-bold">Policies</h4>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button" href="{{ route('corporate_gov') }}">Corporate Governance</a>
                    </div>
                    <!-- Single Catagory Post -->
                    <div class="gazette-single-catagory-post">
                        <a class="btn btn-success btn-block btn-sm button active" href="{{ route('ITRI') }}">ITRI</a>
                    </div>
                </div> --}}
                <div class="col-12 col-md-12">
                    <div class="gazette-heading">
                        <h4 class="font-bold">MSA Ltd Due diligence Risk Management plan to implement OECD guidelines from minerals conflict-affected and high risk areas.</h4>
                    </div>
                   <div class="single-post-blockquote">
                        <blockquote>
                            <h6 class="font-pt mb-0">
                                This Risk Management plan is designed in order to implement MSA conflict Minerals Policy in MSA daily business related to Procurement ,  Processing and Export  of minerals sourced from Artisanal and Small scale (ASM) mining companies or cooperatives operating in Rwanda in order to avoid Conflict Minerals from the region to enter in the Minerals Supply Chain.
                            </h6>
                        </blockquote><br/>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Risk associated to conflict minerals</th>
                                            <th>Risk assessment</th>
                                            <th>Risk management</th>
                                            <th>Risk mitigation measure</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Bribery and fraudulent misrepresentation of minerals origin</b>
                                            </td>
                                            <td><em><b>1. Are all minerals supplied to MSA of identified known origin?</b></em></td>
                                            <td>
                                                <b>a. Physical check of supplied minerals production at MSA gate:</b>
                                                <p style="color:rgba(0, 0, 0, 0.8)">RGL Security Officer controls if all minerals bags are properly iTSCi tagged and accompanied by iTSCi mine log sheet. He records details of the supplying car and his driver in the registration book.</p>
                                                <b>b. Verification of iTSCi chain of custody documents related to supplied minerals (mine yellow sheet) by GMD Tagging Manager under supervision of RGL Officer and MSA staff at MSA Minerals Reception Desk:</b>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    GMD Tagging Manager at MSA checks if tags are properly fixed to the minerals bags before cutting them; he or she weighs each minerals bag and compares the weight readings to the weights recorded on the mine log sheet by GMD Tagging  Manager at the mine site; the acceptable difference in weight is plus or minus 2% of the weight recorded on the mine yellow log sheet. In  case that the weight is higher that what is recorded on the mine log sheet, the minerals lot is not accepted.
                                                </p>
                                                <b>c. Compliance with MSA internal due diligence  documentation</b>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    MSA Staff checks if the supplied minerals are not produced from mining companies which have minerals traceability issues as indicated on regularly sent by MSA Due diligence Department. These lists are compiled from MSA Due diligence mine visits reports;    iTSCi monthly due diligence mine visits reports, GMD Inspection mine visits reports and publications by other concerned institution like Un group of Experts on DRC reports.
                                                </p>
                                                <b>d. Compliance to signed minerals contracts between MSA and minerals producing companies:</b>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    It is mentioned in the signed minerals supply contract that the supplier has to supply iTSCi tagged minerals and that MSA is allowed to do Due diligence mine visits including unannounced spots checks.
                                                </p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    Control measures in Risk Management section can’t allow untagged minerals to enter in MSA compound.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><br/></td>
                                            <td>
                                                <em>
                                                    <b>2. Is the quantity of minerals supplied in correlation with estimated baseline production of the producing mine sites?</b>
                                                </em>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    MSA Due diligence Department does the monitoring of volumes of minerals supplied by each supplying mining company on daily basis by analyzing the daily report of received minerals sent by e-mail by MSA Operation Department Manager to other MSA Departments. These volumes from every supplier are compared to the assumed mining production capacity following the quantities recorded on the excel sheet on previous monthly supplies from each mining company.
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    The capacity production of the supplying mine is also based on the observations from MSA Due diligence mine visits reports. 
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    When the supplied production from mining company is raised to a factor of 1.5 compared to his regular volume supply, MSA Due diligence Departments sends  e-mail to MSA Management; Marketing and Operations departments to alert on this supplier’s issue. This alert is followed either by a due diligence meeting to analyze this case or a mine visit by  MSA Due diligence Team  to assess the actual production capacity of the mine site and will report the findings to MSA Management for action to take against  the suppliers.
                                                </p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    Mitigation measures are taken according to  the magnitude of rise in production and conclusions from mine visits. The mitigation measures may be:
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Verbal or written communication with the supplier warning him on incident that the issue may have on MSA doing minerals business with his mining company. A time line of two months is normally announced to the supplier; period during which MSA does monitoring or rechecks on field  the changes made at the  mine sites.
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -When there is not much progress on mining activities on site and that there is enough doubt on production capacity for the producing sites, MSA stops temporarily buying from the supplier until the mining activities on sites are matching with the reported production by the mining company.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Human rights abuse,  security and safety of artisanal miners at the mine site and environment degradation</b>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)"><em><b>3. i.  Has it been reported or seen illegal mining activities on mine site, or mining activities done by miners under 18 years (child labor)  at  the mine site from which supplied production is produced ?</b></em></p>
                                                <p style="color:rgba(0, 0, 0, 0.8)"><em><b>3. ii. Could the mining safety conditions in which artisanal miners are working endanger their lives with respect to Rwanda Mining Safety Standards on ASM?</b></em></p>
                                                <p style="color:rgba(0, 0, 0, 0.8)"><em><b>3. iii. Does the supplier respect REMA environment regulations in the mining operations?</b></em></p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Mine inspection reports published on GMD website
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -MSA ad iTSCi mine visit
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -News in  media like report on lethal accident at mine sites.
                                                </p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Communicating verbally or in writing with the supplier about the findings with a timeline for eventual corrections or revisit to monitor the progress done.
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Writing a warning letter or temporarily stop buying from the supplier for serious environment degradation like continuous silting of rivers and lakes or poor mine safety conditions which may endanger life of miners. 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Money laundering</b></td>
                                            <td>
                                                <em>
                                                    <b>4 .i. Does MSA know the structure and could identify all shareholders in the mining company supplying minerals to him?</b>
                                                </em>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -All suppliers have to submit to MSA Finance Department their company registration certificate at RDB and their mining license which is still valid at the time of minerals supply to MSA before their paid for minerals production supplied.
                                                    Photocopies of these two suppliers documents are kept and filed in alphabetic order at MSA Finance Department
                                                </p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    Minerals production from individuals or none registered mining companies or without a mining licence are not accepted.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Transparency on taxes, fees and loyalties paid to Government</b>
                                            </td>
                                            <td>
                                                <em>
                                                    <b>5. Are all taxes related to minerals extraction and transport to MSA legal and follow Rwanda Government Taxation scheme?</b>
                                                </em>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">-MSA has put in place transparent system for minerals reception where to every minerals lot is allocated a unique lot number so that anyone can trace the steps through which the minerals lot will pass from reception, processing / upgrading, minerals stock keeping, laboratory analysis, lot payment, minerals export packing list and tagging processed minerals for export / MSA negociant tags; details related to each minerals lot are recorded and properly file at each step.</p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">-Before any payment, MSA Finances Department does the verification of suppliers mining company registration documents at RDB and Tin Number and payment to the supplier is done by bank check.</p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Verification in the supplier’s financial transaction documents for payment done to the miners and the Government during MSA mine visits at supplier’s office book keeping.</p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">-Before any payment, MSA Finances Department does the verification of suppliers mining company registration documents at RDB and Tin Number and payment to the supplier is done by bank check.</p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    -Good collaboration with RRA Officer when doing financial audit of MSA minerals supplier.
                                                </p>
                                            </td>
                                            <td>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    In case the supplier does not pay taxes, MSA warns the suppliers of negative impact on his mining business and fines by RRA following financial audit.
                                                </p>
                                                <p style="color:rgba(0, 0, 0, 0.8)">
                                                    MSA promises to the supplier to assist him by advices on how to keep his financial and other mine documents books keeping for easy consultation and eventual internal and external audits.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div><br/>
                        <blockquote>
                            <h3 class="font-pt mb-0">
                                Abbreviations:
                            </h3><br/><br/>
                            <p class="font-pt mb-0" style="color:rgba(0, 0, 0, 0.8)">
                                <b>GMD:</b> Geology and Mine Department; today renamed Rwanda Mines, Petroleum and Gas Board<br/>
                                <b>REMA:</b> Rwanda Environment Management Agency<br/>
                                <b>RDB:</b> Rwanda Development Board<br/>
                                <b>RGL:</b> Private Security Company contracted by MSA for security of MSA compound in Kigali; the company is registered in RDB<br/>
                                <b>RRA:</b> Rwanda Revenue Authority
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
@endsection