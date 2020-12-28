@extends('layout.company')
@section('content')
<head>
<style>


body, table, input, select, textarea {

}


.graph {
	margin-bottom:1em;
  font:normal 100%/150% arial,helvetica,sans-serif;
}

.graph caption {
	font:bold 150%/120% arial,helvetica,sans-serif;
	padding-bottom:0.33em;
}

.graph tbody th {
	text-align:right;
}

@supports (display:grid) {

	@media (min-width:32em) {

		.graph {
			display:block;
      width:600px;
      height:300px;
		}

		.graph caption {
			display:block;
		}

		.graph thead {
			display:none;
		}

		.graph tbody {
			position:relative;
			display:grid;
			grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));
			column-gap:2.5%;
			align-items:end;
			height:100%;
			margin:3em 0 1em 2.8em;
			padding:0 1em;
			border-bottom:2px solid rgba(0,0,0,0.5);
			background:repeating-linear-gradient(
				180deg,
				rgba(170,170,170,0.7) 0,
				rgba(170,170,170,0.7) 1px,
				transparent 1px,
				transparent 20%
			);
		}

		.graph tbody:before,
		.graph tbody:after {
			position:absolute;
			left:-3.2em;
			width:2.8em;
			text-align:right;
			font:bold 80%/120% arial,helvetica,sans-serif;
		}

		.graph tbody:before {
			content:"100%";
			top:-0.6em;
		}

		.graph tbody:after {
			content:"0%";
			bottom:-0.6em;
		}

		.graph tr {
			position:relative;
			display:block;
		}

		.graph tr:hover {
			z-index:999;
		}

		.graph th,
		.graph td {
			display:block;
			text-align:center;
		}

		.graph tbody th {
			position:absolute;
			top:-3em;
			left:0;
			width:100%;
			font-weight:normal;
			text-align:center;
      white-space:nowrap;
			text-indent:0;
			transform:rotate(-45deg);
		}

		.graph tbody th:after {
			content:"";
		}

		.graph td {
			width:100%;
			height:100%;
			background:#F63;
			border-radius:0.5em 0.5em 0 0;
			transition:background 0.5s;
		}

		.graph tr:hover td {
			opacity:0.7;
		}

		.graph td span {
			overflow:hidden;
			position:absolute;
			left:50%;
			top:50%;
			width:0;
			padding:0.5em 0;
			margin:-1em 0 0;
			font:normal 85%/120% arial,helvetica,sans-serif;
/* 			background:white; */
/* 			box-shadow:0 0 0.25em rgba(0,0,0,0.6); */
			font-weight:bold;
			opacity:0;
			transition:opacity 0.5s;
      color:white;
		}

		.toggleGraph:checked + table td span,
		.graph tr:hover td span {
			width:4em;
			margin-left:-2em; /* 1/2 the declared width */
			opacity:1;
		}



    


	} /* min-width:32em */

} /* grid only */
</style>
<h1> Dashboard Company  </h1>

</head>
<h1> Dashboard  Admin  </h1>
<table class="graph">
	<caption>Bar Chart Table</caption>
	<thead>
		<tr>
			<th scope="col">Item</th>
			<th scope="col">Percent</th>
		</tr>
	</thead><tbody>
		<tr style="height:85%">
			<th scope="row">Your Blog</th>
			<td><span>85%</span></td>
		</tr>
		<tr style="height:23%">
			<th scope="row">Medium</th>
			<td><span>23%</span></td>
		</tr>
		<tr style="height:7%">
			<th scope="row">Tumblr</th>
			<td><span>7%</span></td>
		</tr>
		<tr style="height:38%">
			<th scope="row">Facebook</th>
			<td><span>38%</span></td>
		</tr>
		<tr style="height:35%">
			<th scope="row">Youtube</th>
			<td><span>35%</span></td>
		</tr>
		<tr style="height:30%">
			<th scope="row">LinkedIn</th>
			<td><span>30%</span></td>
		</tr>
		<tr style="height:5%">
			<th scope="row">Twitter</th>
			<td><span>5%</span></td>
		</tr>
		<tr style="height:20%">
			<th scope="row">Other</th>
			<td><span>20%</span></td>
		</tr>
	</tbody>
</table>


@endsection
