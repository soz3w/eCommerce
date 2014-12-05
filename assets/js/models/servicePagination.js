app.factory('Paginer', function ($filter) {

    var factory={};
    // init
    factory.sort = {       
                sortingOrder : 'id',
                reverse : false
            };
    
    factory.gap = 5;
    
    factory.filteredItems = [];
    factory.groupedItems = [];
    factory.itemsPerPage = 5;
    factory.pagedItems = [];
    factory.currentPage = 0;
    factory.items = [];

    var searchMatch = function (haystack, needle) {
        if (!needle) {
            return true;
        }
        return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
    };

    // init the filtered items
    factory.search = function () {
        factory.filteredItems = $filter('filter')(factory.items, function (item) {
            for(var attr in item) {
                if (searchMatch(item[attr], factory.query))
                    return true;
            }
            return false;
        });
        // take care of the sorting order
        if (factory.sort.sortingOrder !== '') {
            factory.filteredItems = $filter('orderBy')(factory.filteredItems, factory.sort.sortingOrder, factory.sort.reverse);
        }
        factory.currentPage = 0;
        // now group by pages
        factory.groupToPages();
    };
    
  
    // calculate page in place
    factory.groupToPages = function () {
        factory.pagedItems = [];
        
        for (var i = 0; i < factory.filteredItems.length; i++) {
            if (i % factory.itemsPerPage === 0) {
                factory.pagedItems[Math.floor(i / factory.itemsPerPage)] = [ factory.filteredItems[i] ];
            } else {
                factory.pagedItems[Math.floor(i / factory.itemsPerPage)].push(factory.filteredItems[i]);
            }
        }
    };
    
    factory.range = function (size,start, end) {
        var ret = [];        
       // console.log(size,start, end);
                      
        if (size < end) {
            end = size;
            start = size-factory.gap;
        }
        for (var i = start; i < end; i++) {
            ret.push(i);
        }        
      //   console.log(ret);        
        return ret;
    };
    
    factory.prevPage = function () {
        if (factory.currentPage > 0) {
            factory.currentPage--;
        }
    };
    
    factory.nextPage = function () {
        if (factory.currentPage < factory.pagedItems.length - 1) {
            factory.currentPage++;
        }
    };
    
    factory.setPage = function () {
        factory.currentPage = this.n;
    };

    // functions have been describe process the data for display
    factory.search();

   return factory;

});





