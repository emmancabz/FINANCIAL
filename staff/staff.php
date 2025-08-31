<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/staff.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/staff.js"></script>
  <title>Accounts</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo-text">
      <img src="../img/viavantalogo.jpg" alt="logo">
    <p>Finance</p>
    </div>
    <div class="sidebar-separator1"></div>
			<nav class="nav flex-column">
				<p class="display">MAIN</p>
				<a class="nav-link" href="#" onclick="showSection('dashboard')">Dashboard</a>
				<a class="nav-link" href="#" onclick="showSection('general-ledger')">General-Ledger</a>
				<div class="nav-item">
					<a href="#" class="nav-link" onclick="toggleDropdown(event, 'accounts-submenu')">
						Accounting ▾
					</a>
					<div id="accounts-submenu" class="submenu">
						<a class="nav-link" href="#" onclick="showSection('accounts-payable')">Accounts Payable</a>
						<a class="nav-link" href="#" onclick="showSection('accounts-receivable')">Accounts Receivable</a>
					</div>
				</div>
				<p class="display">FINANCIAL</p>
				<a class="nav-link" href="#" onclick="showSection('disbursement')">Disbursement</a>
				<a class="nav-link" href="#" onclick="showSection('collection')">Collection</a>
				<a class="nav-link" href="#" onclick="showSection('budget')">Budget</a>
				<p class="display">MANAGEMENT</p>
				<a class="nav-link" href="#" onclick="showSection('users')">Users</a>
				<a class="nav-link" href="#" onclick="showSection('ai-chat')">AI Chat</a>
			</nav>
			<div class="sidebar-bottom">
				<div class="sidebar-separator"></div>
				<div class="profile-section">
					<img src="../img/profilesample.png" alt="Profile Picture">
					<p>ADMIN ▾</p>
				</div>
			</div>
  </div>
  <div class="container">
  <main class="content" id="mainContent">
			<section id="dashboard" class="section active">
				<h3>Dashboard Overview</h3>
				<div class="cards">
					<div class="card success">
						<h4>Total Revenue</h4>
						<div class="big">₱0,000,000</div>
						<div class="card-trend">+12.5% from last month</div>
					</div>
					<div class="card warning">
						<h4>Total Expenses</h4>
						<div class="big">₱1,890,000</div>
						<div class="card-trend">+8.2% from last month</div>
					</div>
					<div class="card success">
						<h4>Net Profit</h4>
						<div class="big">₱000,000</div>
						<div class="card-trend">+18.7% from last month</div>
					</div>
					<div class="card success">
						<h4>Collections (Month)</h4>
						<div class="big">₱000,000</div>
						<div class="card-trend">+15.3% from last month</div>
					</div>
					<div class="card warning">
						<h4>Pending Payables</h4>
						<div class="big">₱000,000</div>
						<div class="card-trend">-5.2% from last month</div>
					</div>
					<div class="card success">
						<h4>Tour Utilization</h4>
						<div class="big">00%</div>
						<div class="card-trend">+3.1% from last month</div>
					</div>
				</div>
				<div class="analytics">
					<div class="chart-card">
						<h4>Revenue Trend (Last 12 Months)</h4>
						<div class="bars-chart" id="revenueChart">
							<div class="bar" style="height:60%"></div>
							<div class="bar" style="height:72%"></div>
							<div class="bar" style="height:50%"></div>
							<div class="bar" style="height:88%"></div>
							<div class="bar" style="height:67%"></div>
							<div class="bar" style="height:79%"></div>
							<div class="bar" style="height:85%"></div>
							<div class="bar" style="height:70%"></div>
							<div class="bar" style="height:93%"></div>
							<div class="bar" style="height:82%"></div>
							<div class="bar" style="height:90%"></div>
							<div class="bar" style="height:76%"></div>
						</div>
						<div class="chart-labels">
							<span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span>
							<span>May</span><span>Jun</span><span>Jul</span><span>Aug</span>
							<span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
						</div>
					</div>

					<div class="chart-card">
						<h4>Expense Breakdown</h4>
						<div class="breakdown">
							<div class="breakdown-row">
								<span class="label">meow</span>
								<div class="barline"><span style="width:35%"></span></div>
								<span class="value">₱000,000</span>
							</div>
							<div class="breakdown-row">
								<span class="label">meow</span>
								<div class="barline"><span style="width:30%"></span></div>
								<span class="value">₱000,000</span>
							</div>
							<div class="breakdown-row">
								<span class="label">Insurance</span>
								<div class="barline"><span style="width:20%"></span></div>
								<span class="value">₱000,000</span>
							</div>
							<div class="breakdown-row">
								<span class="label">Administrative</span>
								<div class="barline"><span style="width:12%"></span></div>
								<span class="value">₱000,000</span>
							</div>
							<div class="breakdown-row">
								<span class="label">Other</span>
								<div class="barline"><span style="width:3%"></span></div>
								<span class="value">₱00,000</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="general-ledger" class="section">
				<h3>General Ledger</h3>
				<div class="table-wrap">
					<table class="table">
						<thead>
							<tr>
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Debit</th>
								<th>Credit</th>
								<th>Balance</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>1001</td><td>Cash </td><td>₱500,000</td><td>-</td><td>₱500,000</td></tr>
							<tr><td>1002</td><td>Accounts Receivable</td><td>₱420,000</td><td>-</td><td>₱420,000</td></tr>
							<tr><td>2001</td><td>Accounts Payable</td><td>-</td><td>₱180,000</td><td>₱180,000</td></tr>
						</tbody>
					</table>
				</div>
			</section>
<div id="disbursement" class="section" style="display:none;">
  <h3 class="disbursement-title">Disbursement</h3>
  <div class="dashboard-cards">
    <div class="card">
      <h5>Total Disbursements</h5>
      <p>₱ 1,245,000.00</p>
    </div>
    <div class="card">
      <h5>Pending</h5>
      <p>12</p>
    </div>
    <div class="card">
      <h5>Approved (Month)</h5>
      <p>₱ 320,000.00</p>
    </div>
    <div class="card">
      <h5>Rejected</h5>
      <p>3</p>
    </div>
  </div>
  <div class="request-form">
    <h5>New Request</h5>
    <form id="disbursementForm">
      <div class="form-row">
        <select required>
          <option value="">Type</option>
          <option>Travel</option>
          <option>Supplier</option>
          <option>Petty Cash</option>
          <option>Operational</option>
        </select>
        <input type="number" placeholder="Amount" required />
      </div>
      <textarea placeholder="Description" rows="2" required></textarea>
      <input type="file" />
      <button type="submit">Submit</button>
    </form>
  </div>
  <div class="history">
    <h5>Requests</h5>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Type</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#D-1023</td>
          <td>Travel</td>
          <td>₱5,600</td>
          <td><span class="status approved">Approved</span></td>
          <td>Aug 21</td>
        </tr>
        <tr>
          <td>#D-1045</td>
          <td>Supplier</td>
          <td>₱45,000</td>
          <td><span class="status pending">Pending</span></td>
          <td>Aug 25</td>
        </tr>
        <tr>
          <td>#D-1010</td>
          <td>Operational</td>
          <td>₱12,000</td>
          <td><span class="status rejected">Rejected</span></td>
          <td>Aug 10</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
      <div id="general-ledger" class="section" style="display:none;">
        <h3>General Ledger</h3>
				<div class="table-wrap">
					<table class="table">
						<thead>
							<tr>
								<th>Account Code</th>
								<th>Account Name</th>
								<th>Debit</th>
								<th>Credit</th>
								<th>Balance</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>1001</td><td>Cash </td><td>₱500,000</td><td>-</td><td>₱500,000</td></tr>
							<tr><td>1002</td><td>Accounts Receivable</td><td>₱420,000</td><td>-</td><td>₱420,000</td></tr>
							<tr><td>2001</td><td>Accounts Payable</td><td>-</td><td>₱180,000</td><td>₱180,000</td></tr>
						</tbody>
					</table>
				</div>
      <div id="accounts-payable" class="section" style="display:none;">
  <h4>Accounts Payable</h4>
  <p>Payables info</p>
</div>
<div id="accounts-receivable" class="section" style="display:none;">
  <h4>Receivable</h4>
  <p>Receivables info</p>
</div>
      <div id="collection" class="section" style="display:none;">
        <h4>Collection</h4>
        <p>Collection details</p>
      </div>
      <div id="budget" class="section" style="display:none;">
        <h4>Budget Management</h4>
        <p>Manage your budget</p>
      </div>
	  <div id="users" class="section" style="display:none;">
        <h4>Users</h4>
        <p>User list</p>
      </div>
	  <div id="ai-chat" class="section" style="display:none;">
        <h4>AI Chat</h4>
        <p>Chat with AI</p>
      </div>
  </div>
  </div>
</body>
</html>