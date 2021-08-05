const $ = jQuery;

$(document).ready(function () {
  $("body").overlayScrollbars({
    className: "os-theme-fourmi-e",
    scrollbars: { visibility: "visible" },
  });
  $(".scroll-wrap ").overlayScrollbars({
    className: "os-theme-fourmi-e",
    scrollbars: { visibility: "visible" },
  });
  /*
  const archiveSection = $(".archive-section");
  const rows = $(archiveSection[0]).find(".archive-table tr");
  const imgs = $(archiveSection[0]).find(".archive-img");
  console.log("🚀 ~ file: script.js ~ line 20 ~ imgs", imgs);
  let currentMousePos = { x: -1, y: -1 };
  $.each(rows, (i, row) => {
    $(row).mousemove(function (e) {
      currentMousePos.x = e.pageX;
      currentMousePos.y = e.pageY;
    });
    $(row).on("mouseenter", function () {
      console.log("oi", this);
      const ID = $(this).attr("data-id");
      console.log("🚀 ~ file: script.js ~ line 20 ~ $ ~ ID", ID);
      const imgFromID = imgs.find("[data-id='" + ID + "']");
      console.log(
        "🚀 ~ file: script.js ~ line 23 ~ $ ~ imgFromID",
        $(imgFromID[0])
      );
      console.log("aaaa", $(imgFromID[0]));
      console.log(
        "🚀 ~ file: script.js ~ line 33 ~ $ ~ currentMousePos.y + $(imgFromID[0])[0].clientHeight",
        currentMousePos.y,
        $(imgFromID[0])[0].clientHeight,
        currentMousePos.y + $(imgFromID[0])[0].clientHeight
      );
      $(imgFromID[0]).css({
        display: "block",
        top: currentMousePos.y - $(imgFromID[0])[0].clientHeight + "px",
      });
    });
  });

*/

  const archiveBehavior = (el) => {
    const rows = el.find(".archive-table tr");
    const imgs = el.find(".archive-img");
    let imgFromID;
    let theRow;
    $(rows).on({
      mouseenter: function () {
        theRow = $(this);
        imgFromID = imgs.find("[data-id='" + theRow.attr("data-id") + "']");
        imgFromID.fadeIn({duration: 800, ease: 'ease-in'})
      },
      mousemove: function (e) {
        imgFromID.css({
          top:
            e.pageY -
            imgFromID[0].offsetHeight / 2 -
            theRow.parents(".archive-table")[0].offsetTop / 1.25 +
            "px",
        });
      },
      mouseleave: function () {
        imgFromID.fadeOut({duration: 200, ease: 'ease-out'}).css({top: 0})
      },
    });
  };

  $.each($(".archive-section"), (i, el) => archiveBehavior($(el)));
});
