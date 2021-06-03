<head>
    <link rel="stylesheet" href="styles.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #996600;">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            SUPAK
        </a>
        <!-- <small>Reporting Crime and Violation</small> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="report_incident.php">REPORT INCIDENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="res_profile.php">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="summary.php">SUMMARY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        REPORT (SEC)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="report_lists.php">List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="report_details.php">Details</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="incident_prof.php">Incident Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="violation_prof.php">Violation Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        REPORT (BCPO)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="list_bcpo.php">List</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="details_bcpo.php">Details</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="confirm_bcpo.php">Confirmation</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        REPORT (CAPT)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="review_incident.php">Review</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        REPORT (STAFF)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="violation_staff.php">Sanctions</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="publish_staff.php">Publish</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="reading_feedback.php">Feedback</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="announcement.php">Announcement</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        LIQUIDATE (TRES.)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="compensate.php">Compensation</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="collections.php">Collections</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>